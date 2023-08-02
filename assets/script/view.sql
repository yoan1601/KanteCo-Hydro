select a.id, u.nom, p.nom_FR, p.nom_EN, from achievements a
JOIN pays p ON a.idPays = p.id
JOIN users u ON u.id = a.idUser;