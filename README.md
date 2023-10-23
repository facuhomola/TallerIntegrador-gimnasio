# TallerIntegrador-gimnasio

# base de datos gimnasio
tabla cargo | clientes | usuarios
- cargo 
  - Id
  - Descripcion
- clientes
  - Id
  - Nombre
  - dni
  - edad
  - sexo
  - gym
  - plan
  - fecha
- usuarios
  - Id
  - user
  - pass
  - nombre
  - dni
  - id_cargo (clave foranea (id de tabla cargo))

# comandos para iniciar servicios
- dhcp server: sudo service isc-dhcp-server start
- Mysql y Apache: sudo /opt/lampp/lampp start
- Proxy Squid: sudo service squid start
