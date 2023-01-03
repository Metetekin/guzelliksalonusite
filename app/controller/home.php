<?php

$sliderList = $conn->prepare("SELECT * FROM slider ORDER BY slider_sid ASC ");
$sliderList->execute(array());
$sliderList = $sliderList->fetchAll(PDO::FETCH_ASSOC);

$commentList = $conn->prepare("SELECT * FROM comments ");
$commentList->execute(array());
$commentList = $commentList->fetchAll(PDO::FETCH_ASSOC);

$referenceList = $conn->prepare("SELECT * FROM reference ");
$referenceList->execute(array());
$referenceList = $referenceList->fetchAll(PDO::FETCH_ASSOC);

$teamList = $conn->prepare("SELECT * FROM team ");
$teamList->execute(array());
$teamList = $teamList->fetchAll(PDO::FETCH_ASSOC);
