PGDMP          (            
    t            registroAcademico    9.3.4    9.3.4 !    �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                       false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                       false            �           1262    16684    registroAcademico    DATABASE     �   CREATE DATABASE "registroAcademico" WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'Spanish_Colombia.1252' LC_CTYPE = 'Spanish_Colombia.1252';
 #   DROP DATABASE "registroAcademico";
             postgres    false                        2615    2200    public    SCHEMA        CREATE SCHEMA public;
    DROP SCHEMA public;
             postgres    false            �           0    0    SCHEMA public    COMMENT     6   COMMENT ON SCHEMA public IS 'standard public schema';
                  postgres    false    5            �           0    0    public    ACL     �   REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;
                  postgres    false    5            �            3079    11750    plpgsql 	   EXTENSION     ?   CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;
    DROP EXTENSION plpgsql;
                  false            �           0    0    EXTENSION plpgsql    COMMENT     @   COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';
                       false    177            �            1259    16734    departamento    TABLE     Y   CREATE TABLE departamento (
    id integer NOT NULL,
    nombre character varying(20)
);
     DROP TABLE public.departamento;
       public         postgres    false    5            �            1259    16732    departamento_id_seq    SEQUENCE     u   CREATE SEQUENCE departamento_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.departamento_id_seq;
       public       postgres    false    5    173            �           0    0    departamento_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE departamento_id_seq OWNED BY departamento.id;
            public       postgres    false    172            �            1259    16726 
   estudiante    TABLE     �   CREATE TABLE estudiante (
    id integer NOT NULL,
    codigo character varying(30),
    nombre character varying(30),
    apellido character varying(30),
    cedula character varying(20),
    edad integer,
    semestre integer
);
    DROP TABLE public.estudiante;
       public         postgres    false    5            �            1259    16724    estudiante_id_seq    SEQUENCE     s   CREATE SEQUENCE estudiante_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.estudiante_id_seq;
       public       postgres    false    171    5            �           0    0    estudiante_id_seq    SEQUENCE OWNED BY     9   ALTER SEQUENCE estudiante_id_seq OWNED BY estudiante.id;
            public       postgres    false    170            �            1259    16742 	   municipio    TABLE     l   CREATE TABLE municipio (
    id integer NOT NULL,
    nombre character varying(20),
    id_depto integer
);
    DROP TABLE public.municipio;
       public         postgres    false    5            �            1259    16740    municipio_id_seq    SEQUENCE     r   CREATE SEQUENCE municipio_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.municipio_id_seq;
       public       postgres    false    175    5            �           0    0    municipio_id_seq    SEQUENCE OWNED BY     7   ALTER SEQUENCE municipio_id_seq OWNED BY municipio.id;
            public       postgres    false    174            �            1259    28029    usuario    TABLE     �   CREATE TABLE usuario (
    nickname character varying(15) NOT NULL,
    nombre character varying(50),
    password character varying(50)
);
    DROP TABLE public.usuario;
       public         postgres    false    5            0           2604    16737    id    DEFAULT     d   ALTER TABLE ONLY departamento ALTER COLUMN id SET DEFAULT nextval('departamento_id_seq'::regclass);
 >   ALTER TABLE public.departamento ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    173    172    173            /           2604    16729    id    DEFAULT     `   ALTER TABLE ONLY estudiante ALTER COLUMN id SET DEFAULT nextval('estudiante_id_seq'::regclass);
 <   ALTER TABLE public.estudiante ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    171    170    171            1           2604    16745    id    DEFAULT     ^   ALTER TABLE ONLY municipio ALTER COLUMN id SET DEFAULT nextval('municipio_id_seq'::regclass);
 ;   ALTER TABLE public.municipio ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    174    175    175            �          0    16734    departamento 
   TABLE DATA               +   COPY departamento (id, nombre) FROM stdin;
    public       postgres    false    173   y        �           0    0    departamento_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('departamento_id_seq', 7, true);
            public       postgres    false    172            �          0    16726 
   estudiante 
   TABLE DATA               S   COPY estudiante (id, codigo, nombre, apellido, cedula, edad, semestre) FROM stdin;
    public       postgres    false    171   �        �           0    0    estudiante_id_seq    SEQUENCE SET     9   SELECT pg_catalog.setval('estudiante_id_seq', 62, true);
            public       postgres    false    170            �          0    16742 	   municipio 
   TABLE DATA               2   COPY municipio (id, nombre, id_depto) FROM stdin;
    public       postgres    false    175   h!       �           0    0    municipio_id_seq    SEQUENCE SET     8   SELECT pg_catalog.setval('municipio_id_seq', 11, true);
            public       postgres    false    174            �          0    28029    usuario 
   TABLE DATA               6   COPY usuario (nickname, nombre, password) FROM stdin;
    public       postgres    false    176   �!       5           2606    16739    departamento_pkey 
   CONSTRAINT     U   ALTER TABLE ONLY departamento
    ADD CONSTRAINT departamento_pkey PRIMARY KEY (id);
 H   ALTER TABLE ONLY public.departamento DROP CONSTRAINT departamento_pkey;
       public         postgres    false    173    173            3           2606    16731    estudiante_pkey 
   CONSTRAINT     Q   ALTER TABLE ONLY estudiante
    ADD CONSTRAINT estudiante_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.estudiante DROP CONSTRAINT estudiante_pkey;
       public         postgres    false    171    171            7           2606    16747    municipio_pkey 
   CONSTRAINT     O   ALTER TABLE ONLY municipio
    ADD CONSTRAINT municipio_pkey PRIMARY KEY (id);
 B   ALTER TABLE ONLY public.municipio DROP CONSTRAINT municipio_pkey;
       public         postgres    false    175    175            9           2606    28033    usuario_pkey 
   CONSTRAINT     Q   ALTER TABLE ONLY usuario
    ADD CONSTRAINT usuario_pkey PRIMARY KEY (nickname);
 >   ALTER TABLE ONLY public.usuario DROP CONSTRAINT usuario_pkey;
       public         postgres    false    176    176            :           2606    16748    municipio_id_depto_fkey    FK CONSTRAINT     z   ALTER TABLE ONLY municipio
    ADD CONSTRAINT municipio_id_depto_fkey FOREIGN KEY (id_depto) REFERENCES departamento(id);
 K   ALTER TABLE ONLY public.municipio DROP CONSTRAINT municipio_id_depto_fkey;
       public       postgres    false    175    173    1845            �   Y   x��)�@@=�
^@­�,��"&�p��[�B-�F)�k�z��Io^?��>=z��D-�����Z�Vf�mY�,�O:\�Xr /�v�      �   v   x�M��
BAD뙏w�y�[���&`�"+(
��f��Iq�I�T\n���)���G\���Nq�:mDͱFü�#E�~���5�eB�.^�c���ͳ�}˻P+*9
�tS�aE�6 \      �   �   x����0Cg�� �B#�T1��p'����|=)��g�Iv�2ؗ�&8�н-��V�GFT�Cǁѯ�G�Q-�4�Li���|1��]EC#��.>����s��n��M){�ʑs��-D+���� v�)U      �   C   x�KL��������˫Tp�I�H�KI-�420JN�43JL6�4072M��M�R��M���b���� W��     