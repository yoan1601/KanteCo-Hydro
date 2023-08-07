-- realisations
CREATE OR REPLACE VIEW v_realisations AS (
select a.*, p.nom_FR, p.nom_EN, EXTRACT(YEAR FROM a.date_demarrage) as annee_demarrage
from achievements a 
JOIN pays p ON p.id = a.idPays
);

-- realisation get all year
CREATE OR REPLACE VIEW v_realisations_all_year AS (
    select annee_demarrage from v_realisations group by annee_demarrage
);
