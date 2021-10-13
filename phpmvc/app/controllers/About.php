<?php 

class About extends Controller {

    public function Index($nama="Robert", $pekerjaan="Designer") {
        $data["nama"] = $nama;
        $data["pekerjaan"] = $pekerjaan;
        $data["judul"] = "about";
        $this->view("templates/header", $data);
        $this->view("about/index", $data);
        $this->view("templates/footer");
    }

    public function Page() {
        $data["judul"] = "my page";
        $this->view("templates/header", $data);
        $this->view("about/page");
        $this->view("templates/footer");
    }
}