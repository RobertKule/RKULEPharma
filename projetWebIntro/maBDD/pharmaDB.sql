INSERT INTO reponses(question,reponse,dateajout) VALUES("Qu'elle est le but de cette entreprise?","contribuer à améliorer la santé des populations africaines en leur fournissant des médicaments sûrs, efficaces et abordables. L'entreprise s'engage à développer des médicaments qui répondent aux besoins spécifiques des patients africains.","2023-12-15");
SELECT * FROM reponses ORDER BY dateajout;

SELECT * FROM utilisateurs WHERE nom LIKE '%Guy%';
DELETE * FROM article WHERE id =1;
