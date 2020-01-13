create if not exists database celex;
use celex;

create table mgrupos(
    id_grupo int not null auto_increment,
    nivel varchar(40) not null,
    plantel varchar(60) not null,
    primary key(id_grupo)
);

create table cdelegaciones(
id_del int not null auto_increment,
    des_del varchar(50) not null,
    primary key(id_del)
);

create table mdirecciones(
    id_dir int not null auto_increment,
    cod_pos int(6) not null,
    col varchar(30) not null,
    cal1 varchar(30) not null,
    cal2 varchar(30) not null,
    numi int not null,
    nume int not null,
    id_del int not null,
    primary key(id_dir),
    foreign key(id_del) references cdelegaciones(id_del)
);

create table ctipoalu(
    tipo_alu int not null auto_increment,
    des_tal varchar(20) not null,
    primary key(tipo_alu)
);

create table cgrados(
    id_grado int not null auto_increment,
    des_grado varchar(30) not null,
    primary key(id_grado)
);

create table csexos(
    id_sex int not null auto_increment,
    des_sex varchar(20) not null,
    primary key(id_sex)
);

create table malumno(
    boleta int not null auto_increment,
    Nombre varchar(50) not null,
    apep varchar(50) not null,
    apem varchar(50) not null,
    d_na int not null,
    mes_na int not null,
    an_na int not null,
    email varchar(50) not null,
    id_grupo int not null,
    id_dir int not null,
    tipo_alu int not null,
    id_grado int not null,
    id_sex int not null,
    esc_pr varchar(60),
    primary key(boleta),
    foreign key (id_grupo) references  mgrupos (id_grupo),
    foreign key (id_dir) references  mdirecciones (id_dir),
    foreign key (tipo_alu) references  ctipoalu (tipo_alu),
    foreign key (id_grado) references  cgrados (id_grado),
    foreign key (id_sex) references  csexos (id_sex)
);

create table mpapeles(
    id_pal int not null auto_increment,
    pago int not null,
    ident int not null,
    hojme int not null,
    fotos int not null,
    primary key(id_pal)
);

create table ctipopago(
    tipo_pago int not null auto_increment,
    des_pago varchar(60) not null,
    primary key(tipo_pago)
);

create table mpagos(
    id_pago int not null auto_increment,
    tipo_pago int not null,
    des_pago int not null,
    primary key(id_pago),
    foreign key(tipo_pago) references ctipopago (tipo_pago)
);

create table mmovimientos(
    boleta int not null auto_increment,
    folio int not null,
    autorizacion int not null,
    id_pago int not null,
    id_pal int not null,
    primary key (boleta),
    foreign key(boleta) references malumno (boleta),
    foreign key(id_pago) references mpagos (id_pago),
    foreign key(id_pal) references mpapeles (id_pal)
);

create table mmaestros(
    clave int not null auto_increment,
    nombre varchar(40) not null,
    apep varchar(40) not null,
    apem varchar(40) not null,
    id_grupo int not null,
    primary key(clave),
    foreign key(id_grupo) references mgrupos (id_grupo)
);

create table ccursos(
    id_cur int not null auto_increment,
    nom_cur varchar(40) not null,
    primary key(id_cur)
);

create table ccursosmaestros(
    id_cur int not null auto_increment,
    clave int not null,
    primary key(id_cur),
    foreign key(id_cur) references ccursos (id_cur),
    foreign key(clave) references mmaestros (clave)
);

create table cperiodos(
    id_peri int not null auto_increment,
    des_peri varchar(40) not null,
    primary key(id_peri)
);

create table mcalificaciones(
    boleta int not null auto_increment,
    id_grupo int not null,
    calif float not null,
    id_peri int not null,
    primary key(boleta),
    foreign key(boleta) references malumno (boleta),
    foreign key(id_grupo) references mgrupos (id_grupo),
    foreign key(id_peri) references cperiodos (id_peri)
    
);

create table mlista(
    id_grupo int not null auto_increment,
    clave int not null,
    id_peri int not null,
    primary key(id_grupo),
    foreign key(id_peri) references cperiodos (id_peri),
    foreign key(clave) references mmaestros (clave),
    foreign key(id_grupo) references mgrupos (id_grupo)
);

create table niveles(
    id_niv int not null auto_increment,
    des_niv varchar(9) not null,
     primary key(id_niv)
);

create table mexamenes(
    boleta int not null auto_increment,
    id_niv int not null,
    use_en float not null,
    rea float not null,
    final float not null,
    pmf float not null,
    primary key(boleta),
    foreign key(boleta)references malumno (boleta),
    foreign key(id_niv)references niveles (id_niv)
);









