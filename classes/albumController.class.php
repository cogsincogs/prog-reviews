<?php

include $_SERVER['DOCUMENT_ROOT'] . "/classes/dbh.class.php";

class AlbumController extends Dbh {
    public function getAlbums() {
        $sql = "SELECT * FROM albums";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getProperty($id, $property) {
        $id = htmlspecialchars($id);
        $property = htmlspecialchars($property);
        $sql = "SELECT $property FROM albums WHERE ID = $id";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function getCount() {
        $sql = "SELECT COUNT(id) FROM albums";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function setAlbum($title, $artist, $year, $genre, $tracks, $imageURL, $rating) {
        $sql = "INSERT INTO albums (Title, Artist, Year, Genre, Tracks, AlbumArtURL, Rating) VALUES (:title, :artist, :year, :genre, :tracks, :imageURL, :rating);";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([
            'title' => $title, 
            'artist' => $artist, 
            'year' => $year, 
            'genre' => $genre, 
            'tracks' => $tracks, 
            'imageURL' => $imageURL, 
            'rating' => $rating
        ]);
    }
}