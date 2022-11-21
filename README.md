ASN
===

# Desarrollo

Para levantar el servidor ejecuta `docker-compose up -d`, se levantará el servicio en la
url [localhost](http://localhost:80)

![Inicio](assets/Img-1.png)

---

A continuación, al desplegar la web podemos ver las 3 secciones, pero antes de ello debemos realizar la migración de la base de datos.

Para ello debemos introducirnos en la consola de la instancia desde docker y realizar la migración con el siguiente comando.

He configurado el despligue de forma que no sea necesario instalar nada y ya tenga todas las dependecias necesarias.

```bash
cd asn
php spark migrate
```

![Migrate](assets/Img-2.png)

Podemos observar que se han creado dos tablas, una con los usuarios y otra con las migraciones que realizamos con php y codeigniter 4.

![Database](assets/Img-3.png)
