<?php 
    function checkuser($user,$pass)
    {
        $conn = ketnoi();
        $stmt = $conn->prepare("SELECT * FROM user WHERE userName = '$user' AND pass = '$pass'");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        if(count($kq)>0) return $kq[0]['role'];
        else return 0;
    }

    function getuserinfo($user,$pass)
    {
        $conn = ketnoi();
        $stmt = $conn->prepare("SELECT * FROM user WHERE userName = '$user' AND pass = '$pass'");
        $stmt->execute();
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $kq = $stmt->fetchAll();
        return $kq;
    }
?>