<?php

Route::get('/departement/home','DepartementsController@home');

Route::get('/departement/user',function(){
    return view('Departement/user');
});

Route::get('/departement/etudiant/list',function(){
    return view('Departement/Etudiants/list');
});

Route::get('/departement/etudiant/import',function(){
    return view('Departement/Etudiants/import');
});

Route::get('/departement/enseignant/list',function(){
    return view('Departement/Enseignants/list');
});

Route::get('/departement/enseignant/import',function(){
    return view('Departement/Enseignants/import');
});

Route::get('/departement/encadrentsMiniProjet/list',function(){
    return view('Departement/EncadrentsMiniProjet/statistique');
});

Route::get('/departement/encadrentsMiniProjet/statistique',function(){
    return view('Departement/EncadrentsMiniProjet/statistique');
});

Route::get('/departement/groupes/listChef',function(){
    return view('Departement/Groupes/listChef');
});
Route::get('/departement/groupes/listGroupes',function(){
    return view('Departement/Groupes/listGroupes');
});
Route::get('/departement/encadrentsStage/list',function(){
    return view('Departement/EncadrentsStage/list');
});
Route::get('/departement/encadrentsStage/statistique',function(){
    return view('Departement/EncadrentsStage/statistique');
});

Route::get('/departement/notifications',function(){
    return view('Departement/notifications');
});

Route::get('/departement/rapports/rapportsStage',function(){
    return view('Departement/Rapports/rapportsStage');
});
Route::get('/departement/rapports/rapportsMiniProjet',function(){
    return view('Departement/Rapports/rapportsMiniProjet');
});

Route::get('/departement/Setting',function(){
    return view('Departement/Setting');
});
//route pour le home
Route::get('/departement/',function(){
    return view('Departement/home');
});

