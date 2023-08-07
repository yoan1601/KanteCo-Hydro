-- realisations
CREATE OR REPLACE VIEW v_realisations AS (
select a.*, p.nom_FR as nom_pays_FR, p.nom_EN as nom_pays_EN, u.nom nom_user, u.telephone, u.mail,EXTRACT(YEAR FROM a.date_demarrage) as annee_demarrage
from achievements a 
JOIN pays p ON p.id = a.idPays
JOIN users u ON u.id = a.idUser
);

-- realisation get all year
CREATE OR REPLACE VIEW v_realisations_all_year AS (
    select annee_demarrage from v_realisations group by annee_demarrage
);
