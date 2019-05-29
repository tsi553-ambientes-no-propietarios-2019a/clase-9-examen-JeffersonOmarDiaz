/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     28/05/2019 18:37:47                          */
/*==============================================================*/


drop table if exists PEDIDOS;

drop table if exists PRODUCTO;

drop table if exists USER;

/*==============================================================*/
/* Table: PEDIDOS                                               */
/*==============================================================*/
create table PEDIDOS
(
   ID                   int not null,
   NOMBREP              varchar(80),
   CANTIDAD             int not null,
   TOTAL                float(5) not null,
   primary key (ID)
);

/*==============================================================*/
/* Table: PRODUCTO                                              */
/*==============================================================*/
create table PRODUCTO
(
   NOMBREP              varchar(80) not null,
   USERNAME             varchar(80) not null,
   ID                   int,
   PRECIO               float(5) not null,
   primary key (NOMBREP)
);

/*==============================================================*/
/* Table: USER                                                  */
/*==============================================================*/
create table USER
(
   USERNAME             varchar(80) not null,
   ID                   int,
   TYPE                 char(20) not null,
   PASSWORD             varchar(255) not null,
   primary key (USERNAME)
);

alter table PEDIDOS add constraint FK_RELATIONSHIP_3 foreign key (NOMBREP)
      references PRODUCTO (NOMBREP) on delete restrict on update restrict;

alter table PRODUCTO add constraint FK_RELATIONSHIP_2 foreign key (USERNAME)
      references USER (USERNAME) on delete restrict on update restrict;

alter table PRODUCTO add constraint FK_RELATIONSHIP_5 foreign key (ID)
      references PEDIDOS (ID) on delete restrict on update restrict;

alter table USER add constraint FK_RELATIONSHIP_4 foreign key (ID)
      references PEDIDOS (ID) on delete restrict on update restrict;

