<?php
require_once(__DIR__ . '/../helpers/database.php');


class Patient
{
    private int $_id;
    private string $_lastname;
    private string $_firstname;
    private string $_birthdate;
    private string $_phone;
    private string $_mail;

    // start fonction construct //

    // public function __construct(string $lastname, string $firstname, string $birthdate, string $phone, string $mail)
    // {
    //     $this->_lastname = $lastname;
    //     $this->_firstname = $firstname ;
    //     $this->_birthdate = $birthdate;
    //     $this ->_phone = $phone;
    //     $this->_mail = $mail;
    // }
    // end fonction construct

    // Défintion des Getters //

    /** Récupère la valeur de l'ID.
     * @return int
     */
    public function getId(): int
    {
        return $this->_id;
    }
    /** Récupère la valeur du Nom de Famille.
     * @return string
     */
    public function getLastName(): string
    {
        return $this->_lastname;
    }
    /** Récupère la valeur du Prénom.
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->_firstname;
    }
    /** Récupère la valeur de la Date de Naissance.
     * @return string
     */
    public function getBirthDate(): string
    {
        return $this->_birthdate;
    }
    /** Récupère la valeur du n° de téléphone.
     * @return string
     */
    public function getPhone(): string
    {
        return $this->_phone;
    }
    /** Récupère la valeur de l'Email.
     * @return string
     */
    public function getMail(): string
    {
        return $this->_mail;
    }

    // Définition des Setters //

    /** Hydrate la valeur de l'ID.
     * @param int $valueId
     * 
     * @return [void]
     */
    public function setId(int $valueId): void
    {
        $this->_id = $valueId;
    }
    /** Hydrate la valeur du Nom de Famille
     * @param string $valueLastName
     * 
     * @return [void]
     */
    public function setLastName(string $valueLastName): void
    {
        $this->_lastname = $valueLastName;
    }
    /** Hydrate la valeur du Prénom
     * @param string $valueFirstName
     * 
     * @return [void]
     */
    public function setFirstName(string $valueFirstName): void
    {
        $this->_firstname = $valueFirstName;
    }
    /** Hydrate la valeur de la date de naissance.
     * @param string $valueBirthDate
     * 
     * @return [void]
     */
    public function setBirthDate(string $valueBirthDate): void
    {
        $this->_birthdate = $valueBirthDate;
    }
    /** Hydrate la valeur du numéro de téléphone
     * @param string $valuePhone
     * 
     * @return [void]
     */
    public function setPhone(string $valuePhone): void
    {
        $this->_phone = $valuePhone;
    }
    /** Hydrate la valeur du Mail.
     * @param string $valueMail
     * 
     * @return [void]
     */
    public function setMail(string $valueMail): void
    {
        $this->_mail = $valueMail;
    }


    // **********************  Définition des fonctions utiles. ********************************** //
    // Fonction d'ajout de patients non static puisqu'elle ajoute ou modifie des choses de la base de données.
    public function add()
    {
        $addpatient = 'INSERT INTO `patients` (`lastname`, `firstname`, `birthdate`, `phone`, `mail`) VALUES (:lastname, :firstname, :birthdate, :phone, :mail)';

        $sth = Database::getInstance()->prepare($addpatient);

        $sth->bindValue(':lastname', $this->getLastName());
        $sth->bindValue(':firstname', $this->getFirstName());
        $sth->bindValue(':birthdate', $this->getBirthDate());
        $sth->bindValue(':phone', $this->getPhone());
        $sth->bindValue(':mail', $this->getMail());

        return $sth->execute();
    }
    // Fonction permettant de vérifier si un utilisateur existe déjà dans la base de données.
    public static function exist(string $valueMail): bool
    {
        $pdo = Database::getInstance();
        $stmt = $pdo->prepare("SELECT `patients`.`id` FROM `patients` WHERE `mail`= :mail;");
        $stmt->bindValue(':mail', $valueMail);
        $success = $stmt->execute();
        if ($success) {
            if (empty($stmt->fetch())) {
                return false;
            } else {
                return true;
            }
        };
    }
    // public static function getAll($search = ''): array
    // {
    //     if (empty($search)) {
    //         $sql = 'SELECT `id`, `lastname`, `firstname`, `birthdate` FROM `patients`';
    //         $sth = Database::getInstance()->query($sql);
    //         $patients = $sth->fetchAll();
            
    //         return $patients;
    //     } else {
    //         $sql = 'SELECT `id`, `lastname`, `firstname`, `birthdate` FROM `patients` WHERE `lastname`=:search OR `firstname`=:search OR `birthdate`=:search OR `phone`=:search OR `mail`=:search';
    //         $sth = Database::getInstance()->prepare($sql);
    //         $sth->bindValue(':search', $search);
    //         if ($sth->execute()) {
    //             $patients = $sth->fetchAll();
    //             return $patients;
    //         }
    //     }
    // }
    // Méthode pour afficher le profil d'un patient
    public static function getOne(int $id)
    {
        $sth = Database::getInstance()->prepare('SELECT * FROM `patients` WHERE `id`= :id');
        $sth->bindValue(':id', $id, PDO::PARAM_INT);
        $sth->execute();
        return $sth->fetch();
    }

    // Méthode pour modifier le profil du patient.
    public function modifyPatient()
    {
        $modifyPatient = 'UPDATE `patients` SET `lastname`=:lastname, `firstname`=:firstname,`birthdate`=:birthdate, `phone`=:phone, `mail`=:mail WHERE `id`=:id';

        $sth = Database::getInstance()->prepare($modifyPatient);

        $sth->bindValue(':lastname', $this->getLastName());
        $sth->bindValue(':firstname', $this->getFirstName());
        $sth->bindValue(':birthdate', $this->getBirthDate());
        $sth->bindValue(':phone', $this->getPhone());
        $sth->bindValue(':mail', $this->getMail());
        $sth->bindValue(':id', $this->getId(), PDO::PARAM_INT);

        if ($sth->execute()) {
            $result = $sth->rowCount();
            return ($result >= 1) ? true : false;
        };
    }
    public static function deleteAll(int $id)
    {
        $deleteAll = 'DELETE FROM `patients` WHERE `patients`.`id`=:id;';
        $sth = DATABASE::getInstance()->prepare(($deleteAll));
        $sth->bindValue(':id', $id, PDO::PARAM_INT);
        if ($sth->execute()){
            if($sth->rowCount() == 1) {
                return true;
            }else{
                return false;
            };
        }
    }

     // Méthode pour afficher tous les patients avec une barre de recherche.
    public static function getAll($limit, $offset, $search = ''){
        if (empty($search)) {
            $sql = 'SELECT * FROM `patients` LIMIT :limit OFFSET :offset;';
            $sth = Database::getInstance()->prepare($sql);
            $sth->bindValue(':limit', $limit, PDO::PARAM_INT);
            $sth->bindValue(':offset', $offset, PDO::PARAM_INT);
            $sth->execute();
            // On récupère les valeurs dans un tableau associatif.
            $patients = $sth->fetchAll(PDO::FETCH_OBJ);
            return $patients;
        } else {
            $sql = 'SELECT * FROM `patients` 
            WHERE `lastname` LIKE :search 
            OR `firstname` LIKE :search 
            OR `birthdate` = :search 
            OR `phone` = :search 
            OR `mail` = :search';
            $sth = Database::getInstance()->prepare($sql);
            $sth->bindValue(':search', '%'.$search.'%');
            if ($sth->execute()) {
                $patients = $sth->fetchAll(PDO::FETCH_OBJ);
                return $patients;
            }    
        }
    }

// Méthode pour calculé le nombre totale de patients.
    public static function count(){
        $sql = 'SELECT COUNT(`id`) AS `nbPatients` FROM `patients`;';
        $sth = Database::getInstance()->prepare($sql);
        $sth->execute();
        $count = $sth->fetch();
        return $count->nbPatients;
    }
}


