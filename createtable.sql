CREATE TABLE [dbo].[Student_Details] (
    [Student_Id] INT          NOT NULL,
    [First_Name] VARCHAR (50) NOT NULL,
    [Last_Name]  VARCHAR (50) NOT NULL,
    [Degree]     VARCHAR (50) NOT NULL,
    [Major]      VARCHAR (50) NULL,
    [Gender]     CHAR (10)    NULL,
    [DOB]        DATE         NULL,
    [Grad_Year]  INT          NULL,
    PRIMARY KEY CLUSTERED ([Student_Id] ASC)
);



CREATE TABLE [dbo].[Course_Details] (
    [Student_Id]   INT          NOT NULL,
    [Course_Id]    VARCHAR (50) NOT NULL,
    [Year]         INT          NOT NULL,
    [Semester]     VARCHAR (50) NOT NULL,
    [Professor_Id] INT          NULL,
    [Grade]        CHAR (10)    NULL,
    PRIMARY KEY CLUSTERED ([Student_Id] ASC)
);



CREATE TABLE [dbo].[Professor_Details] (
    [Professor_Id] INT          NOT NULL,
    [Prof_FName]   VARCHAR (50) NOT NULL,
    [Prof_LName]   VARCHAR (50) NOT NULL,
    [Department]   VARCHAR (50) NOT NULL,
    [DOB]          DATE         NOT NULL,
    PRIMARY KEY CLUSTERED ([Professor_Id] ASC)
);

