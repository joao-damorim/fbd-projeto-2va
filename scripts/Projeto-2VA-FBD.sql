CREATE DATABASE Projeto2VA;

USE Projeto2VA;

CREATE TABLE Departamento(
	CodDept INT ,
    Nome VARCHAR(100),
    Gerente VARCHAR(11)
    );
    
CREATE TABLE Funcionario(
	CPF VARCHAR(11) ,
    Nome VARCHAR(100),
    Telefone VARCHAR(20),
    Salario FLOAT,
    Tipo VARCHAR(30),
    CodDept INT
    );

CREATE TABLE FuncionarioADM(
	CPF VARCHAR(11) ,
    HorarioInicio TIME,
    HorarioSaida TIME, 
    NumSala INT
    );

CREATE TABLE FuncionarioProjeto(
	CPF VARCHAR(11) ,
    CodProjeto INT
    );
    
CREATE TABLE Projeto(
	Codigo INT ,
    Nome VARCHAR(100),
    DataInicial DATE,
    DataFinal DATE
    );
    
CREATE TABLE Historico_Funcionario(
	CPF CHAR(11) ,
    Cargo VARCHAR(100),
    DataInicial DATE,
    DataFinal DATE,
    CodDept INT
    );
    
INSERT INTO Departamento (codDept, nome, gerente) VALUES
(1, 'Pesquisa','86648850825' ),
(2, 'Administrativo', '55493753355'),
(3, 'TI', '49155851156'),
(4, 'Engenharia', '16044449497'),
(5, 'Marketing', '48155852157'),
(6, 'RH', '44229943541');

INSERT INTO Funcionario (cpf, nome, telefone, salario, tipo, coddept) VALUES
('86648850825', 'João', '925373347', 5000.00, 'FPROJ', 1),
('96803988903', 'Marcelo', '966835012', 3500.00, 'FPROJ', 1),
('69167197474', 'Judith', '964349954', 3500.00, 'FPROJ', 1),
('55493753355', 'Elias', '958760195', 5000.00, 'FADM', 2),
('31262763260', 'Mariana', '968493004', 2500.00, 'FADM', 2),
('45511187916', 'Selena', '959638062', 2500.00, 'FADM', 2),
('49155851156', 'Everton', '962216516', 5000.00, 'FPROJ', 3),
('39386158365', 'Eudes', '934860139', 3000.00, 'FPROJ', 3),
('64003189228', 'Josué', '955554719', 3000.00, 'FPROJ', 3),
('16044449497', 'Julia', '945148429', 5000.00, 'FPROJ', 4),
('39238634863', 'Tereza', '926301704', 2000.00, 'FPROJ', 4),
('48155852157', 'Maria', '970344518', 5000.00, 'FADM', 5),
('74588684899', 'Zuleide', '978706588', 1500.00, 'FADM', 5),
('57277172262', 'Matias', '916453324', 1500.00, 'FADM', 5),
('58219869565', 'Vivian', '986975658', 1500.00, 'FADM', 5),
('12243738121', 'Pedro', '964449239', 1500.00, 'FADM', 5),
('44229943541', 'Isabele', '937453033', 5000.00, 'FADM', 6),
('37082281583', 'Junior', '967110563', 1500.00, 'FADM', 6),
('57845863486', 'Menelau', '919418444', 1500.00, 'FADM', 6);

INSERT INTO FuncionarioADM (cpf, horarioinicio, horariosaida, numsala) VALUES
('55493753355', '08:00', '18:00', 10),
('31262763260', '08:00', '18:00', 10),
('45511187916', '08:00', '18:00', 10),
('48155852157', '08:00', '18:00', 13),
('74588684899', '08:00', '18:00', 13),
('57277172262', '08:00', '18:00', 13),
('58219869565', '08:00', '18:00', 13),
('12243738121', '08:00', '18:00', 13),
('44229943541', '08:00', '18:00', 17),
('37082281583', '08:00', '18:00', 17),
('57845863486', '08:00', '18:00', 17);

INSERT INTO Projeto (Codigo, Nome, DataInicial) VALUES
(1, 'Rocket', 01-02-2016),
(2, 'Aqua', 11-04-2016),
(3, 'Magma', 23-07-2017);

INSERT INTO FuncionarioProjeto (cpf, codprojeto) VALUES
('49155851156',1),
('39386158365',1),
('64003189228',1),
('16044449497',2),
('39238634863',2),
('86648850825',3),
('96803988903',3),
('69167197474',3);

INSERT INTO Historico_Funcionario (cpf, cargo, DataInicial) VALUES
('86648850825', 'Gerente de Pesquisa', 10-08-2012),
('96803988903', 'Engenheiro', 20-01-2013),
('69167197474', 'Engenheiro', 10-08-2012),
('55493753355', 'Gerente Administrativo', 10-08-2012),
('31262763260', 'Técnico de Infórmática', 15-05-2015),
('45511187916', 'Técnico de Informática', 15-05-2015),
('49155851156', 'Gerente de TI', 10-08-2012),
('39386158365', 'Designer', 10-08-2012),
('64003189228', 'Desenvolvedor', 10-08-2012),
('16044449497', 'Engenheira do Trabalho', 10-08-2012),
('39238634863', 'Segurança do Trabalho', 10-08-2012),
('48155852157', 'Gerente de Marketing', 20-11-2013),
('74588684899', 'Atendente', 10-08-2012),
('57277172262', 'Publicitário', 15-09-2014),
('58219869565', 'Publicitário', 30-09-2014),
('12243738121', 'Promotor de Vendas', 10-08-2012),
('44229943541', 'Gerente de RH', 03-04-2014),
('37082281583', 'Assistente de RH', 16-08-2015),
('57845863486', 'Assistente de RH', 01-03-2015);
    
ALTER TABLE Departamento ADD PRIMARY KEY(CodDept);
ALTER TABLE Funcionario ADD PRIMARY KEY(CPF);
ALTER TABLE FuncionarioADM ADD PRIMARY KEY(CPF);
ALTER TABLE FuncionarioProjeto ADD PRIMARY KEY(CPF);
ALTER TABLE Projeto ADD PRIMARY KEY(Codigo);
ALTER TABLE Historico_Funcionario ADD PRIMARY KEY(CPF, DataInicial);


ALTER TABLE Departamento ADD FOREIGN KEY (Gerente) REFERENCES Funcionario(CPF) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE Funcionario ADD FOREIGN KEY (CodDept) REFERENCES Departamento (CodDept) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE FuncionarioADM ADD FOREIGN KEY (CPF) REFERENCES Funcionario (CPF) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE FuncionarioProjeto ADD FOREIGN KEY (CPF) REFERENCES Funcionario(CPF) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE FuncionarioProjeto ADD FOREIGN KEY (CodProjeto) REFERENCES Projeto (Codigo) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE Historico_Funcionario ADD FOREIGN KEY (CPF) REFERENCES Funcionario(CPF) ON DELETE CASCADE ON UPDATE CASCADE;