<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perusahaan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('status') != "login"){
   		redirect(base_url('Home'));
   	}
   		else if($this->session->userdata('role') =='kandidat'){
			redirect('kandidat');
		}
		else if($this->session->userdata('role') =='admin'){
			redirect('admin');
		}
  
	}
	public function index() {
		$id_perusahaan=$this->session->userdata('id_perusahaan');
		$data['perusahaan']=$this->Dataperusahaan_model->profilperusahaan($id_perusahaan);
		$data['jmlkandidat']=$this->Datakandidat_model->Jumlahkandidat();
		$data['jmlperusahaan']=$this->Dataperusahaan_model->Jumlahperusahaan();
		$data['jmllowongan']=$this->Datalowongan_model->Jumlahlowongan();
		$this->load->view('perusahaan/header',$data);
		$this->load->view('home/home_pt/content_pt',$data);
		$this->load->view('home/footer');
	}

	public function create() {
		$id_perusahaan=$this->session->userdata('id_perusahaan');
		$data['perusahaan']=$this->Dataperusahaan_model->profilperusahaan($id_perusahaan);
		$this->load->view('perusahaan/header1',$data);
		$this->load->view('perusahaan/createjob');
		$this->load->view('home/footer');
	}

	public function manage() {
		$data['la']=$this->Datalowongan_model->lowonganaktifwhere($this->session->userdata('id_perusahaan'));
		$data['ln']=$this->Datalowongan_model->lowongannonaktifwhere($this->session->userdata('id_perusahaan'));
		$data['jmlak']=$this->Datalowongan_model->aktifwhere($this->session->userdata('id_perusahaan'));
		$data['jmlnon']=$this->Datalowongan_model->nonaktifwhere($this->session->userdata('id_perusahaan'));
		$id_perusahaan=$this->session->userdata('id_perusahaan');
		$data['perusahaan']=$this->Dataperusahaan_model->profilperusahaan($id_perusahaan);
		$this->load->view('perusahaan/header1',$data);
		$this->load->view('perusahaan/managejob',$data);
		$this->load->view('home/footer');
	}
	public function manageresume ($id_lowongan) {
		$data['perusahaan']=$this->Datalowongan_model->daftarperusahaan($id_lowongan);
		$data['lowonganlamar']=$this->Datalowongan_model->datalowongan($id_lowongan);
		$data['lowonganterima']=$this->Datalowongan_model->datalowonganterima($id_lowongan);
		$data['jmlterima']=$this->Datalowongan_model->datalowonganterimajml($id_lowongan);
		$data['jml']=$this->Datalowongan_model->datalowonganjml($id_lowongan);


		$id_perusahaan=$this->session->userdata('id_perusahaan');
		//$data['perusahaan']=$this->Dataperusahaan_model->profilperusahaan($id_perusahaan);
		$this->load->view('perusahaan/header1',$data);
		$this->load->view('perusahaan/manageresume',$data);
		$this->load->view('home/footer');
	}
	public function cetakdaftarpelamar($id_lowongan)
	{
		$data['perusahaan']=$this->Datalowongan_model->daftarperusahaan($id_lowongan);
		$data['lowonganlamar']=$this->Datalowongan_model->datalowongan($id_lowongan);
		$this->load->view('perusahaan/cetaklaporanpelamar',$data);
	}
	public function cetakdaftarterima($id_lowongan)
	{
		$data['perusahaan']=$this->Datalowongan_model->daftarperusahaan($id_lowongan);
		$data['lowonganlamar']=$this->Datalowongan_model->datalowonganterima($id_lowongan);
		$this->load->view('perusahaan/cetaklaporanterima',$data);
	}
	public function checkdetail ($id_kandidat) {
		$data['pelamar']=$this->Datakandidat_model->Datapelamar($id_kandidat);
		$data['pengalaman']=$this->Datakandidat_model->Datapengalaman($id_kandidat);
		$id_perusahaan=$this->session->userdata('id_perusahaan');
		$data['perusahaan']=$this->Dataperusahaan_model->profilperusahaan($id_perusahaan);
		$this->load->view('perusahaan/header1',$data);
		$this->load->view('perusahaan/checkdetail',$data);
		$this->load->view('home/footer');
	}
	public function editcompany () {
		$id_perusahaan=$this->session->userdata('id_perusahaan');
		$data['perusahaan']=$this->Dataperusahaan_model->profilperusahaan($id_perusahaan);
		$this->load->view('perusahaan/header1',$data);
		$this->load->view('perusahaan/editcompany',$data);
		$this->load->view('home/footer');
	}
	public function TambahLowongan()
	{
		$judul=$_POST['judul'];
		$kategori=$_POST['kategori'];
		$posisi=$_POST['posisi'];
		$gaji=$_POST['gaji'];
		$average = $_POST['average'];
		$lokasi=$_POST['lokasi'];
		$sd=date('Y-m-d',strtotime($_POST['startdate']));
		$ed=date('Y-m-d',strtotime($_POST['enddate']));
		$des=$_POST['deskripsi'];
		$req=$_POST['syarat'];
		$data=array(
			'id_lowongan'		=>$this->Penomoran_model->IDLowongan(),
			'nama_lowongan'		=>$judul,
			'kategori'			=>$kategori,
			'lokasi'			=>$lokasi,
			'gaji'				=>$gaji,
			'average' 			=> $average,
			'posisi'			=>$posisi,
			'tgl_post'			=>$sd,
			'bataspendaftaran'	=>$ed,
			'deskripsi'			=>$des,
			'syarat'			=>$req,
			'status_low'		=>'Aktif',
			'id_perusahaan'		=>$this->session->userdata('id_perusahaan')
		);
		$this->Datalowongan_model->TambahLowongan('lowongan',$data);
		$this->session->set_flashdata('berhasil','true');
		redirect(base_url('Perusahaan'));
	}
	public function editlowongan($id_lowongan)
	{
		$id_perusahaan=$this->session->userdata('id_perusahaan');
		$data['perusahaan']=$this->Dataperusahaan_model->profilperusahaan($id_perusahaan);
		$data['lowongan'] =$this->Datalowongan_model->lowonganwhere($id_lowongan);
		$this->load->view('perusahaan/header1',$data);
		$this->load->view('perusahaan/editjob',$data);
		$this->load->view('home/footer');
	}
	public function ubahlamaran($id_kandidat,$id_lowongan)
	{
		$profil= $this->Datakandidat_model->kandidatperusahaan($id_kandidat);
		$this->Dataperusahaan_model->Updatelamaran($id_kandidat,$id_lowongan);
		$id_perusahaan=$this->session->userdata('id_perusahaan');
		$perusahaan=$this->Dataperusahaan_model->profiles($id_perusahaan);
		$lowongan=$this->Datalowongan_model->lowonganarray($id_lowongan);
		$posisi=$lowongan[0]['posisi'];
		$jabatan=$lowongan[0]['nama_lowongan'];
		$emailto=$profil[0]['email'];
		$kandidat=$profil[0]['nama'];
		$nama=$perusahaan[0]['nm_perusahaan'];
		//echo $emailto;
		//echo $nama.$posisi.$jabatan	;
		 $this->load->library('email');
	    $config = array();
	    $config['charset'] = 'utf-8';
	    $config['useragent'] = 'Codeigniter';
	    $config['protocol']= "smtp";
	    $config['mailtype']= "html";
	    $config['smtp_host']= "ssl://smtp.gmail.com";//pengaturan smtp
	    $config['smtp_port']= "465";
	    $config['smtp_timeout']= "400";
	    $config['smtp_user']= "antokarjeun@gmail.com"; // isi dengan email kamu
	    $config['smtp_pass']= "01234limo"; // isi dengan password kamu
	    $config['crlf']="\r\n"; 
	    $config['newline']="\r\n"; 
	    $config['wordwrap'] = TRUE;
	    //memanggil library email dan set konfigurasi untuk pengiriman email
	   
	    $this->email->initialize($config);
	    //konfigurasi pengiriman
	    $this->email->from($config['smtp_user']);
	    $this->email->to($emailto);
	    $this->email->subject("Notifikasi");
	    $this->email->message(
	     "Selamat saudara ".$kandidat.",<br><br> Anda dinyatakan lolos seleksi tahap 1<br><br>".
	     // site_url("detik.com")
	     "Best Regards,<br><br>".$nama
	    );
  
    if($this->email->send())
    {
		redirect(base_url('Perusahaan'));
	}
}
	public function tolaklamaran($id_kandidat,$id_lowongan)
	{
		$profil= $this->Datakandidat_model->kandidatperusahaan($id_kandidat);
		$this->Dataperusahaan_model->tolaklamaran($id_kandidat,$id_lowongan);
		$id_perusahaan=$this->session->userdata('id_perusahaan');
		$perusahaan=$this->Dataperusahaan_model->profiles($id_perusahaan);
		$lowongan=$this->Datalowongan_model->lowonganarray($id_lowongan);
		$posisi=$lowongan[0]['posisi'];
		$jabatan=$lowongan[0]['nama_lowongan'];
		$emailto=$profil[0]['email'];
		$kandidat=$profil[0]['nama'];
		$nama=$perusahaan[0]['nm_perusahaan'];
		//echo $emailto;
		//echo $nama.$posisi.$jabatan	;
		 $this->load->library('email');
	    $config = array();
	    $config['charset'] = 'utf-8';
	    $config['useragent'] = 'Codeigniter';
	    $config['protocol']= "smtp";
	    $config['mailtype']= "html";
	    $config['smtp_host']= "ssl://smtp.gmail.com";//pengaturan smtp
	    $config['smtp_port']= "465";
	    $config['smtp_timeout']= "400";
	    $config['smtp_user']= "antokarjeun@gmail.com"; // isi dengan email kamu
	    $config['smtp_pass']= "01234limo"; // isi dengan password kamu
	    $config['crlf']="\r\n"; 
	    $config['newline']="\r\n"; 
	    $config['wordwrap'] = TRUE;
	    //memanggil library email dan set konfigurasi untuk pengiriman email
	   
	    $this->email->initialize($config);
	    //konfigurasi pengiriman
	    $this->email->from($config['smtp_user']);
	    $this->email->to($emailto);
	    $this->email->subject("Notifikasi");
	    $this->email->message(
	     "Maaf saudara ".$kandidat.",<br><br> Anda dinyatakan tidak lolos seleksi tahap 1<br><br>".
	     // site_url("detik.com")
	     "Best Regards,<br><br>".$nama
	    );
  
    if($this->email->send())
    {
		redirect(base_url('Perusahaan/manage'));
	}
	}
	public function Ubahprofil()
	{
		$config['upload_path'] = './assets/img/';
        $config['allowed_types'] = 'jpg|png|gif';
        $config['max_size']      = 100000;
        // load library upload
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('myfiles')) {
	         $id_perusahaan=$this->session->userdata('id_perusahaan');
	     	$perusahaan=$this->Dataperusahaan_model->getwhere($id_perusahaan);
	     	$logo 	= $perusahaan[0]['logo'];
        } 
        else {
       	 $result = $this->upload->data(); 
       	 $logo =  $result['file_name'];
        }
	      $data = array(
	      'logo' => $logo,
	      'nm_perusahaan' => $this->input->post('nama'),
	      'email' => $this->input->post('email'),
	      'website' => $this->input->post('website'),
	      'telp' => $this->input->post('tlp'),
	      'alamat_perusahaan' => $this->input->post('alamat'),
	      'deskripsi_perusahaan' => $this->input->post('des')
	  
	    );
	      $where=array(
	      	'id_perusahaan'=>$this->session->userdata('id_perusahaan'));
    
   		 $this->Dataperusahaan_model->ubahprofile($data,$where);
   		 $this->session->set_flashdata('updateberhasil','true');
				redirect('perusahaan/editcompany');
	}

	public function updatelowongan()
	{
			$id_lowongan=$_POST['id_lowongan'];
			$judul		=$_POST['judul'];
			$kategori	=$_POST['kategori'];
			$posisi		=$_POST['posisi'];
			$gaji		=$_POST['gaji'];
			$average	=$_POST['average'];
			$lokasi		=$_POST['lokasi'];
			$sd 		=date('Y-m-d',strtotime($_POST['startdate']));
			$ed 		=date('Y-m-d',strtotime($_POST['enddate']));
			$des 		=$_POST['deskripsi'];
			$req 		=$_POST['syarat'];
			$data_update = array (
				'id_lowongan'=>$id_lowongan,
				'nama_lowongan'=>$judul,
				'kategori'=>$kategori,
				'lokasi'=>$lokasi,
				'gaji'=>$gaji,
				'average' => $average,
				'posisi'=>$posisi,
				'tgl_post'=>$sd,
				'bataspendaftaran'=>$ed,
				'deskripsi'=>$des,
				'syarat'=>$req,
				'status_low'=>'Aktif',
				'id_perusahaan'=>$this->session->userdata('id_perusahaan')
			);
			$result = $this->Datalowongan_model->updatelowongan($data_update, $id_lowongan);
			if ($result > 0) {
				$this->session->set_flashdata('updateberhasil','true');
				redirect('perusahaan/manage');
			}
			else {
				$this->session->set_flashdata('updategagal','true');
				redirect('perusahaan/manage');
			}
	}
	public function nonaktifkanlowongan($id_lowongan){
			$matikanlowongan	= $this->Datalowongan_model->nonaktifkanlowongan($id_lowongan);

			$this->session->set_flashdata('lowongannonaktif','true');
			redirect('perusahaan/manage');	
	}
	public function test() 
	{
	     	$id_perusahaan=$this->session->userdata('id_perusahaan');
	     	$perusahaan=$this->Dataperusahaan_model->getwhere($id_perusahaan);
	     	$logo 	= $perusahaan[0]['logo'];
	     	echo $logo ;
		
	}
	
}
?>