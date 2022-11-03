<?php

require_once(__DIR__ . '/../helpers/database.php');


class Appointment
{
    private int $_id;
    private string $_dateHour;
    private int $_idPatients;
    private $pdo;


    // Définition des Getters
    public function getId(): int
    {
        return $this->_id;
    }
    public function getdateHour(): string
    {
        return $this->_dateHour;
    }
    public function getIdPatient(): int
    {
        return $this->_idPatients;
    }

    // Définition des Setters

    public function setId(int $valueId): void
    {
        $this->_id = $valueId;
    }
    public function setDateHour(int $valueDateHour): void
    {
        $this->_dateHour = $valueDateHour;
    }
    public function setIdPatient(int $valueIdPatient): void
    {
        $this->_idPatients = $valueIdPatient;
    }

    // *************** Définition des fonctions utiles **************** //

    // Définition de la method construct.
    public function __construct(string $dateHour, int $idPatients)
    {
        $this->pdo = Database::getInstance();
        $this->_dateHour = $dateHour;
        $this->_idPatients = $idPatients;
    }


    public function add(): bool
    {
        $addappointment = 'INSERT INTO `appointments` (`dateHour`, `idPatients`) VALUES (:dateHour, :idPatients)';

        $sth = $this->pdo->prepare($addappointment);
        $sth->bindValue(':dateHour', $this->getdateHour());
        $sth->bindValue(':idPatients', $this->getIdPatient(), PDO::PARAM_INT);
        if ($sth->execute()) {
            return ($sth->rowCount() >= 1) ? true : false;
        }
    }

    public static function getAll():array
    {
        $sql = 'SELECT * FROM `appointments` INNER JOIN `patients` ON `appointments`.`idPatients` = `patients`.`id` ';
        $sth = Database::getInstance()->query($sql);
        $appointements = $sth->fetchAll();
        return $appointements;
    }
    public static function getOne(int $id){
        $sth = Database::getInstance()->prepare('SELECT * FROM `appointments` INNER JOIN `patients` ON `appointments`.`idPatients` = `patients`.`id`');
        $sth-> bindValue(':id', $id, PDO::PARAM_INT);
        $sth->execute();
        return $sth->fetch();
    }
}
