SELECT *
FROM etudiants
WHERE DATEADD(YEAR, 18, date_naissance) <= GETDATE();
