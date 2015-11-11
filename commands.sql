create databese kanri;
grant all on kanri.* to dbuser@localhost identified by 'kanri';

use kanri

create table users (
    id int not null auto_increment primary key,
    name varchar(255),
    email varchar(255) unique, //重複しないように
    password varchar(255),
    created datetime,
    modified datetime
);

