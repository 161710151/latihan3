<?php

class segitiga {

		public $as;
		public $tg;

		public function set_nilai($alas,$tinggi)
	{
		$this->as = $alas;
		$this->tg = $tinggi;
	}

	public function get_nilai()
	{
		return $this->as*$this->tg/2;
	}
}


$segitiga1 = new segitiga;
$segitiga1 -> set_nilai(11,10);
echo "Rumus segitiga :".$segitiga1->get_nilai(). '<br>';

echo "<br>";


class persegi {

		public $pl;
		public $lb;

		public function set_nilai($panjang,$lebar)
	{
		$this->pl = $panjang;
		$this->lb = $lebar;
	}

	public function get_nilai()
	{
		return $this->pl*$this->lb;
	}
}


$persegi1 = new persegi;
$persegi1 -> set_nilai(10,10);
echo "Rumus persegi :".$persegi1->get_nilai(). '<br>';


echo "<br>";


class persegipanjang {

		public $s;
		public $si;
		public $sis;
		public $sisi;


		public function set_nilai($s,$si,$sis,$sisi)
	{
		$this->ss 		= $s;
		$this->ss1		= $si;
		$this->ss2		= $sis;
		$this->ss3		= $sisi;

	}

	public function get_nilai()
	{
		return $this->ss*$this->ss1*$this->ss2*$this->ss3;
	}
}


$persegipanjang1 = new persegipanjang;
$persegipanjang1 -> set_nilai(2,2,2,2);
echo "Rumus persegi :".$persegipanjang1->get_nilai(). '<br>';















?>