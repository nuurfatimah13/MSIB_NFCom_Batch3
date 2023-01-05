<?php

  class Flasher {
    public static function setFlash($title, $message, $action, $type) {
      $_SESSION['flash'] = [
        'title' => $title,
        'message' => $message,
        'action' => $action,
        'type' => $type
      ];
    }

    public static function flash() {
      if ( isset($_SESSION['flash']) ) {
        echo '<div class="alert alert-' . $_SESSION['flash']['type'] .' alert-dismissible fade show" role="alert">
        Data '. $_SESSION['flash']['title'] . ' <strong> '. $_SESSION['flash']['message'] . '</strong> '. $_SESSION['flash']['action'] . '
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';

        unset($_SESSION['flash']);

      }
    }

    public static function setMessage($pesan, $aksi, $type)
    {

        $_SESSION['msg'] = [
            'pesan' => $pesan,
            'aksi'  => $aksi,
            'type'  => $type
        ];   
    }

    public static function Message(){
        if( isset($_SESSION['msg']) )
        {

            echo '<div class="alert alert-'. $_SESSION['msg']['type'] .' alert-dismissible fade show" role="alert">
                    Data <strong>'. $_SESSION['msg']['pesan'] .'</strong> '. $_SESSION['msg']['aksi'] .'
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>';

            unset($_SESSION['msg']);
        }

    }

  }