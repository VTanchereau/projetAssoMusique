USE bagad;

INSERT INTO instrument (id, name) VALUES
(0, 'caisse-claire'),
(1, 'bombarde'),
(2, 'cornemuse'),
(3, 'percussion'),
(4, 'grosse-caisse');

INSERT INTO type (id, label, with_fee) VALUES
(0, 'sortie', 1),
(1, 'répétition', 0),
(2, 'concours', 0),
(3, 'assemblée générale', 0),
(4, 'réunion', 0);

INSERT INTO groupe (id, label) VALUES
(0, 'membre'),
(1, 'bureau');

INSERT INTO user (id, first_name, last_name, birth_date, phone_number, mail, login, password, instrument_id) VALUES
(0, 'Erwan', 'Raulo', '1991-11-08', '0600000000', 'raulo.erwan@example.com', 'log0', md5('pass0'), 0),
(1, 'Adrien', 'Guillaume', '1991-10-08', '0600000001', 'guillaume.adrien@example.com', 'log1', md5('pass1'), 1),
(2, 'Jean-Pierre', 'Meneghin', '1991-06-08', '0600000002', 'jean-pierre.meneghin@example.com', 'log2', md5('pass2'), 2),
(3, 'Erwan', 'Wakedman', '1991-05-08', '0600000003', 'wakedman.erwan@example.com', 'log3', md5('pass3'), 3),
(4, 'Kilian', 'Cohuet', '1991-12-08', '0600000004', 'cohuer.kilian@example.com', 'log4', md5('pass4'), 4);

INSERT INTO article (id, title, content, creation_date, visibility, author) VALUES
(0, 'Concours', 'resultats concours lorient 2017', '2017-07-21 00:00:00', 1, 0),
(1, 'Fete du slip', 'soirée cuir et moustache', '2017-06-15 00:00:00', 1, 0);

INSERT INTO event (id, name, start_date, end_date, place, description, fee, type_id, organizer) VALUES
(0, 'HellFest', '2017-06-16 00:00:00', '2017-06-17 00:00:00', 'Clisson, France', 'Le Hellfest, également appelé Hellfest Summer Open Air, est un festival de musique français spécialisé dans les musiques extrêmes', 1000, 0, 0),
(1, 'Concours Lorient 2017', '2017-08-05 00:00:00', '2017-08-06 00:00:00', 'Lorient, France', 'Concours national des Bagadou', NULL, 2, 0),
(2, 'Reunion commission musicale', '2017-10-01 00:00:00', '2017-10-01 00:00:00', 'Ploemeur, France', 'Réflexion sur le programme de l\'année suivante', NULL, 4, 0);

INSERT INTO groupe_user (groupe_id, user_id) VALUES
(0, 0),
(0, 1),
(1, 2),
(1, 3),
(1, 4);

INSERT INTO user_event (user_id, event_id, confirmed) VALUES
(0, 0, 1),
(1, 0, 1),
(2, 0, 0),
(3, 0, 0),
(4, 0, 1),
(0, 1, 1),
(1, 1, 1),
(2, 1, 1),
(3, 1, 1),
(4, 1, 1),
(0, 2, 1),
(1, 2, 1);
