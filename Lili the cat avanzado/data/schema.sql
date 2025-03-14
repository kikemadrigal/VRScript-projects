CREATE TABLE IF NOT EXISTS records (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name varchar(20),
    score int,
    date varchar(255)
);   


   insert into records (name, score, date) values 
        ('Neo', 45000, datetime('now','localtime')),
        ('Trinity', 41400, datetime('now','localtime')),
        ('Morpheus', 38553, datetime('now','localtime')),
        ('Cifra', 35551, datetime('now','localtime')),
        ('Smith agent', 32504, datetime('now','localtime')),
        ('Oraculo', 1422, datetime('now','localtime')),
        ('Merovingio', 50, datetime('now','localtime')),
        ('Persephone', 40, datetime('now','localtime')),
        ('Arquitect', 30, datetime('now','localtime')),
        ('Anakin Skywalker', 20, datetime('now','localtime')),
        ('Luke Skywalker', 23, datetime('now','localtime')),
        ('Han solo', 20, datetime('now','localtime')),
        ('Leia Organa', 18, datetime('now','localtime')),
        ('Yoda', 4, datetime('now','localtime'));

