<?php
namespace Controller;

use App\SessionHandler;
use Model\Upload;
use Repo\UploadRepository;
use Repo\UserRepository;
use View\HomeView;
use \FilesystemIterator;

class HomeController extends Controller
{
    //this array contains all valid file extensions
    private static $allowed = array(
        "jpg", "png", "jpeg", "gif",
    );
    private $relativePath;
    public $user;
    public $allUploads;

    public function __construct()
    {
        $this->view = new HomeView($this);
        //Get the user by the id stored in the session
        $id = SessionHandler::Get('userId');
        $this->user = UserRepository::getInstance()->GetUserById($id);
        $this->repository = UploadRepository::getInstance();

        //show all media uploads
        $this->allUploads = $this->repository->SelectAll();
            $this->view->SetContent(array(
                'uploads' => $this->allUploads,
                'boardTitle' => 'Public Media'
        ));        
    }

    public function YourUploads()
    {
        //show media uploads by the users id
        $rows = $this->user->getMedia();
        $this->view->SetContent(array(
            'uploads' => $rows,
            'boardTitle' => 'Your Uploads',
        ));
        $this->view->DisplayPage();
    }

    public function Upload()
    {
        $title = isset($_POST['title']) ? htmlspecialchars($_POST['title']) : "";
        $description = isset($_POST['description']) ? htmlspecialchars($_POST['description']) : "";
        $file = isset($_FILES['picture']) ? $_FILES['picture'] : "";

        //Validate the formular data
        if (!$this->formDataIsValid($title, $description, $file)) {
            $this->view->DisplayPage();
            return;
        }

        //save the entity only, when the file has been copied successfully
        if ($this->MoveFile($file)) {
            $upload = new Upload($this->user->id, $this->relativePath, $title, $description);
            $this->repository->Insert($upload);
            header("Location: /home");
        }
    }

    private function MoveFile($file)
    {
        $dir = getenv("WEBROOT") . "/img/user" . $this->user->id . "/";
        //create a personal folder for the user
        if (!is_dir($dir)) {
            mkdir($dir);
        }
        //build the filename with pic*.extension
        $type = explode('/', $file['type']);
        $extension = end($type);
        //count all the files in the dir
        $fi = new FilesystemIterator($dir, FilesystemIterator::SKIP_DOTS);
        $filename = "pic" . (iterator_count($fi) + 1) . ".$extension";
        //relative path to the picture for the upload entity
        $this->relativePath = "/../../.." . str_replace(getenv("WEBROOT"), "", $dir) . $filename;

        return move_uploaded_file($file["tmp_name"], $dir . $filename);
    }

    private function formDataIsValid($title, $description, $file)
    {
        $message = "";

        //check empty input fields
        if (empty($title) || empty($description) || empty($file)) {
            $message .= "One or more of the required input fields are empty <br>";
        }

        //validate the datatype of the file
        if (!empty($file)) {
            // Check file size
            if ($file['error'] == UPLOAD_ERR_INI_SIZE ||
                $file['error'] == UPLOAD_ERR_FORM_SIZE) {
                $message .= "The size of the file is too big! (More than 2MB) <br>";
            }
            else {
                $type = explode('/', $file['type']);
                $extension = end($type);
                if (!in_array($extension, static::$allowed)) {
                    $message .= "The extension $extension is not supported! <br>";
                }
            }
        }

        if ($message) {
            $this->view->SetContent(array(
                'message' => $message,
            ));
            return false;
        }
        return true;
    }
}
