<?php
class ItemProduk
{
    protected $warna;
    protected $ukuran;
    protected $nama;

    public function __construct($warna, $ukuran, $nama)
    {
        $this->warna = $warna;
        $this->ukuran = $ukuran;
        $this->nama = $nama;
    }
    public  function getWarna()
    {
        return $this->warna;
    }

    public function getUkuran()
    {
        return $this->ukuran;
    }

    public function getNama()
    {
        return $this->nama;
    }
}

class Topi extends ItemProduk
{
    private $model;

    public function __construct($warna, $ukuran, $nama, $model)
    {
        parent::__construct($warna, $ukuran, $nama);
        $this->model = $model;
    }

    public function getModel()
    {
        return $this->model;
    }
}

class Celana extends ItemProduk
{
    private $model;
    private $tipe;

    public function __construct($warna, $ukuran, $nama, $model, $tipe)
    {
        parent::__construct($warna, $ukuran, $nama);
        $this->model = $model;
        $this->tipe = $tipe;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getTipe()
    {
        return $this->tipe;
    }
}

class Pakaian extends ItemProduk
{
    private $tipe;

    public function __construct($warna, $ukuran, $nama, $tipe)
    {
        parent::__construct($warna, $ukuran, $nama);
        $this->tipe = $tipe;
    }

    public function getTipe()
    {
        return $this->tipe;
    }
}

$topi = new Topi('Hitam', 'Medium', 'NB', 'Half');
$celana = new Celana('Hitam', 'Medium', 'Balenciaga', 'Celana Pendek', 'Cordury');
$pakaian = new Pakaian('Pink', 'Medium', 'Supreme', 'Swetear');

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <div class="card mt-4" style="width: 18rem;">
                    <div class="card-header bg-info">
                        Topi
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Warna <?php echo $topi->getWarna() ?></li>
                        <li class="list-group-item">Ukuran <?php echo $topi->getUkuran() ?></li>
                        <li class="list-group-item">Nama <?php echo $topi->getNama() ?></li>
                        <li class="list-group-item">Model <?php echo $topi->getModel() ?></li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="card mt-4" style="width: 18rem;">
                    <div class="card-header bg-warning">
                        Celana
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Warna <?php echo $celana->getWarna() ?></li>
                        <li class="list-group-item">Ukuran <?php echo $celana->getUkuran() ?></li>
                        <li class="list-group-item">Nama <?php echo $celana->getNama() ?></li>
                        <li class="list-group-item">Model <?php echo $celana->getModel() ?></li>
                        <li class="list-group-item">Tipe <?php echo $celana->getTipe() ?></li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="card mt-4" style="width: 18rem;">
                    <div class="card-header bg-success">
                        Pakaian
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Warna <?php echo $pakaian->getWarna() ?></li>
                        <li class="list-group-item">Ukuran <?php echo $pakaian->getUkuran() ?></li>
                        <li class="list-group-item">Nama <?php echo $pakaian->getNama() ?></li>
                        <li class="list-group-item">Model <?php echo $pakaian->getTipe() ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>