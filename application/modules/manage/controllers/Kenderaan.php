<?php

class Kenderaan extends Admin_Controller
{
    public function listkend()
    {
        $data = $this->db->get("EV_T01_KENDERAAN");
        $this->template->title("Senarai Permohonan");
        $this->template->set("data",$data);
        $this->template->render();
    }
    public function delete($id_kenderaan,$id2="")
    {
        $this->db
            ->where("T01_ID",$id_kenderaan)
            ->delete("EV_T01_KENDERAAN");

        redirect(module_url("kenderaan/listkend"));

    
    }
    public function add()
    {
        $data_to_insert = [
            "T01_KOD_KENDERAAN" => "123",
            "T01_NAMA_KENDERAAN" => "BAS PENDEK"
        ];
        $this->db->insert("EV_T01_KENDERAAN", $data_to_insert);
        redirect(module_url("kenderaan/listkend"));
    }
}