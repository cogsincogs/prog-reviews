<?php

include "dbh.class.php";

class AlbumController extends Dbh {
    public function getAlbums() {
        $sql = "SELECT * FROM albums";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
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