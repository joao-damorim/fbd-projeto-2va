CREATE DATABASE Projeto;

USE Projeto;

CREATE TABLE Departamento(
	CodDept INT  NOT NULL,
    Nome VARCHAR(100),
    Gerente VARCHAR(11),
    CONSTRAINT PRIMARY KEY (CodDept),
    CONSTRAINT FOREIGN KEY (Gerente) REFERENCES Funcionario (CPF)
    );
    
CREATE TABLE Funcionario(
	CPF VARCHAR(11) NOT NULL,
    Nome VARCHAR(100),
    Telefone VARCHAR(20),
    Salario FLOAT,
    Tipo
    CodDept INT NOT NULL,
    CONSTRAINT PRIMARY KEY (CPF),
    CONSTRAINT FOREIGN KEY (CodDept) REFERENCES Departamento (CodDept)
    );

CREATE TABLE FuncionarioADM(
	CPF VARCHAR(11) NOT NULL,
    HorarioInicio TIME,
    HorarioSaida TIME, 
    NumSala INT,
    CONSTRAINT PRIMARY KEY (CPF),
    CONSTRAINT FOREIGN KEY (CPF) REFERENCES Funcionario (CPF)
    );

CREATE TABLE FuncionarioProjeto(
	CPF VARCHAR(11) NOT NULL,
    CodProjeto INT NOT NULL,
    CONSTRAINT PRIMARY KEY (CPF),
    CONSTRAINT FOREIGN KEY (CPF) REFERENCES Funcionario (CPF),
    CONSTRAINT FOREIGN KEY (CodDept) REFERENCES Departamento (CodDept)
    );
    
CREATE TABLE Projeto(
	Codigo INT NOT NULL,
    Nome VARCHAR(100),
    DataInicial DATE,
    DataFinal DATE,
    CONSTRAINT PRIMARY KEY (Codigo)
    );
    
CREATE TABLE Historico_Funcionario(
	CPF CHAR(11) NOT NULL,
    Cargo VARCHAR(100),
    DataInicial DATE,
    DataFinal DATE,
    CodDept INT NOT NULL,
    CONSTRAINT PRIMARY KEY (CPF),
    CONSTRAINT PRIMARY KEY (DataInicial),
    CONSTRAINT FOREIGN KEY (CPF) REFERENCES Funcionario (CPF)
    );