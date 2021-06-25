<?php
class Report{
	protected $nama_driver;
    protected $jumlah_pengiriman;
	protected $nama_customer;
	protected $alamat_pengiriman;
	protected $nama_barang;
	
	public function __construct($nama_driver,$jumlah_pengiriman,$nama_customer,$alamat_pengiriman,$nama_barang){
        $this->nama_driver = $nama_driver;
        $this->jumlah_pengiriman = $jumlah_pengiriman;
		$this->nama_customer = $nama_customer;
        $this->alamat_pengiriman = $alamat_pengiriman;
		$this->nama_barang = $nama_barang;
	}

    public function getDriverName(){
		return $this->nama_driver;
	}
    public function getJumlahPengiriman(){
		return $this->jumlah_pengiriman;
	}
    public function getCustomerName(){
		return $this->nama_customer;
	}
    public function getAddress(){
		return $this->alamat_pengiriman;
	}
    public function getItemName(){
		return $this->nama_barang;
	}
}
?>