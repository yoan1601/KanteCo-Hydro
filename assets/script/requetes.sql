UPDATE users set mot_de_passe = md5(nom);

alter table contacts ADD etat integer NOT NULL DEFAULT 1;
alter table emails ADD etat integer NOT NULL DEFAULT 1;