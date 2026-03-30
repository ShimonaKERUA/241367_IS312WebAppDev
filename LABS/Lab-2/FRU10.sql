CREATE TABLE Program (
    ProgramCode VARCHAR (10) PRIMARY KEY,
    ProgramName VARCHAR (50) NOT NULL
);

CREATE TABLE Student (
    StudentNo INT PRIMARY KEY,
    Firstname VARCHAR (50),
    Lastname VARCHAR (50),
    Gender VARCHAR(10),
    ContactNo VARCHAR(20),
    ProgramCode VARCHAR (10),
    FOREIGN KEY (ProgramCode) REFERENCES Program (ProgramCode)
);