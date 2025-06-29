--
-- PostgreSQL database dump
--

-- Dumped from database version 16.9 (Ubuntu 16.9-0ubuntu0.24.10.1)
-- Dumped by pg_dump version 16.9 (Ubuntu 16.9-0ubuntu0.24.10.1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: blog_item; Type: TABLE; Schema: public; Owner: willsm
--

CREATE TABLE public.blog_item (
    id bigint NOT NULL,
    title text NOT NULL,
    content text NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);


ALTER TABLE public.blog_item OWNER TO willsm;

--
-- Name: blog_item_id_seq; Type: SEQUENCE; Schema: public; Owner: willsm
--

CREATE SEQUENCE public.blog_item_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.blog_item_id_seq OWNER TO willsm;

--
-- Name: blog_item_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: willsm
--

ALTER SEQUENCE public.blog_item_id_seq OWNED BY public.blog_item.id;


--
-- Name: cache; Type: TABLE; Schema: public; Owner: willsm
--

CREATE TABLE public.cache (
    key character varying(255) NOT NULL,
    value text NOT NULL,
    expiration integer NOT NULL
);


ALTER TABLE public.cache OWNER TO willsm;

--
-- Name: cache_locks; Type: TABLE; Schema: public; Owner: willsm
--

CREATE TABLE public.cache_locks (
    key character varying(255) NOT NULL,
    owner character varying(255) NOT NULL,
    expiration integer NOT NULL
);


ALTER TABLE public.cache_locks OWNER TO willsm;

--
-- Name: failed_jobs; Type: TABLE; Schema: public; Owner: willsm
--

CREATE TABLE public.failed_jobs (
    id bigint NOT NULL,
    uuid character varying(255) NOT NULL,
    connection text NOT NULL,
    queue text NOT NULL,
    payload text NOT NULL,
    exception text NOT NULL,
    failed_at timestamp(0) without time zone DEFAULT CURRENT_TIMESTAMP NOT NULL
);


ALTER TABLE public.failed_jobs OWNER TO willsm;

--
-- Name: failed_jobs_id_seq; Type: SEQUENCE; Schema: public; Owner: willsm
--

CREATE SEQUENCE public.failed_jobs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.failed_jobs_id_seq OWNER TO willsm;

--
-- Name: failed_jobs_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: willsm
--

ALTER SEQUENCE public.failed_jobs_id_seq OWNED BY public.failed_jobs.id;


--
-- Name: job_batches; Type: TABLE; Schema: public; Owner: willsm
--

CREATE TABLE public.job_batches (
    id character varying(255) NOT NULL,
    name character varying(255) NOT NULL,
    total_jobs integer NOT NULL,
    pending_jobs integer NOT NULL,
    failed_jobs integer NOT NULL,
    failed_job_ids text NOT NULL,
    options text,
    cancelled_at integer,
    created_at integer NOT NULL,
    finished_at integer
);


ALTER TABLE public.job_batches OWNER TO willsm;

--
-- Name: jobs; Type: TABLE; Schema: public; Owner: willsm
--

CREATE TABLE public.jobs (
    id bigint NOT NULL,
    queue character varying(255) NOT NULL,
    payload text NOT NULL,
    attempts smallint NOT NULL,
    reserved_at integer,
    available_at integer NOT NULL,
    created_at integer NOT NULL
);


ALTER TABLE public.jobs OWNER TO willsm;

--
-- Name: jobs_id_seq; Type: SEQUENCE; Schema: public; Owner: willsm
--

CREATE SEQUENCE public.jobs_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.jobs_id_seq OWNER TO willsm;

--
-- Name: jobs_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: willsm
--

ALTER SEQUENCE public.jobs_id_seq OWNED BY public.jobs.id;


--
-- Name: media_item; Type: TABLE; Schema: public; Owner: willsm
--

CREATE TABLE public.media_item (
    id bigint NOT NULL,
    type character varying(255) NOT NULL,
    path character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);


ALTER TABLE public.media_item OWNER TO willsm;

--
-- Name: media_item_id_seq; Type: SEQUENCE; Schema: public; Owner: willsm
--

CREATE SEQUENCE public.media_item_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.media_item_id_seq OWNER TO willsm;

--
-- Name: media_item_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: willsm
--

ALTER SEQUENCE public.media_item_id_seq OWNED BY public.media_item.id;


--
-- Name: media_item_tag; Type: TABLE; Schema: public; Owner: willsm
--

CREATE TABLE public.media_item_tag (
    media_item_id integer NOT NULL,
    tag_id integer NOT NULL
);


ALTER TABLE public.media_item_tag OWNER TO willsm;

--
-- Name: migrations; Type: TABLE; Schema: public; Owner: willsm
--

CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);


ALTER TABLE public.migrations OWNER TO willsm;

--
-- Name: migrations_id_seq; Type: SEQUENCE; Schema: public; Owner: willsm
--

CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.migrations_id_seq OWNER TO willsm;

--
-- Name: migrations_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: willsm
--

ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;


--
-- Name: password_reset_tokens; Type: TABLE; Schema: public; Owner: willsm
--

CREATE TABLE public.password_reset_tokens (
    email character varying(255) NOT NULL,
    token character varying(255) NOT NULL,
    created_at timestamp(0) without time zone
);


ALTER TABLE public.password_reset_tokens OWNER TO willsm;

--
-- Name: sessions; Type: TABLE; Schema: public; Owner: willsm
--

CREATE TABLE public.sessions (
    id character varying(255) NOT NULL,
    user_id bigint,
    ip_address character varying(45),
    user_agent text,
    payload text NOT NULL,
    last_activity integer NOT NULL
);


ALTER TABLE public.sessions OWNER TO willsm;

--
-- Name: tag; Type: TABLE; Schema: public; Owner: willsm
--

CREATE TABLE public.tag (
    id bigint NOT NULL,
    type character varying(255) NOT NULL,
    handle character varying(255) NOT NULL,
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone,
    deleted_at timestamp(0) without time zone
);


ALTER TABLE public.tag OWNER TO willsm;

--
-- Name: tag_id_seq; Type: SEQUENCE; Schema: public; Owner: willsm
--

CREATE SEQUENCE public.tag_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.tag_id_seq OWNER TO willsm;

--
-- Name: tag_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: willsm
--

ALTER SEQUENCE public.tag_id_seq OWNED BY public.tag.id;


--
-- Name: users; Type: TABLE; Schema: public; Owner: willsm
--

CREATE TABLE public.users (
    id bigint NOT NULL,
    name character varying(255) NOT NULL,
    email character varying(255) NOT NULL,
    email_verified_at timestamp(0) without time zone,
    password character varying(255) NOT NULL,
    remember_token character varying(100),
    created_at timestamp(0) without time zone,
    updated_at timestamp(0) without time zone
);


ALTER TABLE public.users OWNER TO willsm;

--
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: willsm
--

CREATE SEQUENCE public.users_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER SEQUENCE public.users_id_seq OWNER TO willsm;

--
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: willsm
--

ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;


--
-- Name: blog_item id; Type: DEFAULT; Schema: public; Owner: willsm
--

ALTER TABLE ONLY public.blog_item ALTER COLUMN id SET DEFAULT nextval('public.blog_item_id_seq'::regclass);


--
-- Name: failed_jobs id; Type: DEFAULT; Schema: public; Owner: willsm
--

ALTER TABLE ONLY public.failed_jobs ALTER COLUMN id SET DEFAULT nextval('public.failed_jobs_id_seq'::regclass);


--
-- Name: jobs id; Type: DEFAULT; Schema: public; Owner: willsm
--

ALTER TABLE ONLY public.jobs ALTER COLUMN id SET DEFAULT nextval('public.jobs_id_seq'::regclass);


--
-- Name: media_item id; Type: DEFAULT; Schema: public; Owner: willsm
--

ALTER TABLE ONLY public.media_item ALTER COLUMN id SET DEFAULT nextval('public.media_item_id_seq'::regclass);


--
-- Name: migrations id; Type: DEFAULT; Schema: public; Owner: willsm
--

ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);


--
-- Name: tag id; Type: DEFAULT; Schema: public; Owner: willsm
--

ALTER TABLE ONLY public.tag ALTER COLUMN id SET DEFAULT nextval('public.tag_id_seq'::regclass);


--
-- Name: users id; Type: DEFAULT; Schema: public; Owner: willsm
--

ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);


--
-- Data for Name: blog_item; Type: TABLE DATA; Schema: public; Owner: willsm
--

COPY public.blog_item (id, title, content, created_at, updated_at, deleted_at) FROM stdin;
1	example blog	# HEADDERRRT\r\n* bullet\r\n* point\r\n* list\r\n* of\r\n* stuff\r\n**this is bold**	2025-06-28 09:57:24	2025-06-28 09:57:24	\N
\.


--
-- Data for Name: cache; Type: TABLE DATA; Schema: public; Owner: willsm
--

COPY public.cache (key, value, expiration) FROM stdin;
\.


--
-- Data for Name: cache_locks; Type: TABLE DATA; Schema: public; Owner: willsm
--

COPY public.cache_locks (key, owner, expiration) FROM stdin;
\.


--
-- Data for Name: failed_jobs; Type: TABLE DATA; Schema: public; Owner: willsm
--

COPY public.failed_jobs (id, uuid, connection, queue, payload, exception, failed_at) FROM stdin;
\.


--
-- Data for Name: job_batches; Type: TABLE DATA; Schema: public; Owner: willsm
--

COPY public.job_batches (id, name, total_jobs, pending_jobs, failed_jobs, failed_job_ids, options, cancelled_at, created_at, finished_at) FROM stdin;
\.


--
-- Data for Name: jobs; Type: TABLE DATA; Schema: public; Owner: willsm
--

COPY public.jobs (id, queue, payload, attempts, reserved_at, available_at, created_at) FROM stdin;
\.


--
-- Data for Name: media_item; Type: TABLE DATA; Schema: public; Owner: willsm
--

COPY public.media_item (id, type, path, created_at, updated_at, deleted_at) FROM stdin;
2	art	images/Mynewsong.mp4	2025-06-28 10:22:38	2025-06-28 10:22:43	2025-06-28 10:22:43
5	media	videos/Mynewsong.mp4	2025-06-28 10:25:30	2025-06-28 10:25:30	\N
6	media	videos/ghost panda.mp4	2025-06-28 10:25:47	2025-06-28 10:25:47	\N
7	media	videos/test song 123 ft. kit.mp4	2025-06-28 10:26:10	2025-06-28 10:26:10	\N
8	media	videos/fizy pop.mp4	2025-06-28 10:29:08	2025-06-28 10:29:08	\N
9	media	videos/Trash Panda Inc. presents： trash panda.mp4	2025-06-28 10:29:42	2025-06-28 10:29:42	\N
10	media	videos/buffer.mp4	2025-06-28 10:30:32	2025-06-28 10:30:32	\N
11	media	videos/bbombbobbobm.mp4	2025-06-28 10:30:51	2025-06-28 10:30:51	\N
12	media	videos/GHOSTTEST.mp4	2025-06-28 10:31:37	2025-06-28 10:31:37	\N
1	art	images/IMG_6602.jpeg	2025-06-28 09:58:06	2025-06-29 11:58:39	2025-06-29 11:58:39
13	art	images/IMG_7147.jpeg	2025-06-29 11:59:04	2025-06-29 11:59:04	\N
14	art	images/IMG_7146.jpeg	2025-06-29 11:59:04	2025-06-29 11:59:04	\N
15	art	images/IMG_7145.jpeg	2025-06-29 11:59:04	2025-06-29 11:59:04	\N
16	art	images/IMG_7144.jpeg	2025-06-29 11:59:04	2025-06-29 11:59:04	\N
17	art	images/IMG_7143.jpeg	2025-06-29 11:59:04	2025-06-29 11:59:04	\N
18	art	images/IMG_7142.jpeg	2025-06-29 11:59:04	2025-06-29 11:59:04	\N
19	art	images/IMG_7141.jpeg	2025-06-29 11:59:04	2025-06-29 11:59:04	\N
20	art	images/IMG_7140.jpeg	2025-06-29 11:59:04	2025-06-29 11:59:04	\N
21	art	images/IMG_7139.jpeg	2025-06-29 11:59:04	2025-06-29 11:59:04	\N
22	art	images/IMG_7138.jpeg	2025-06-29 11:59:04	2025-06-29 11:59:04	\N
\.


--
-- Data for Name: media_item_tag; Type: TABLE DATA; Schema: public; Owner: willsm
--

COPY public.media_item_tag (media_item_id, tag_id) FROM stdin;
\.


--
-- Data for Name: migrations; Type: TABLE DATA; Schema: public; Owner: willsm
--

COPY public.migrations (id, migration, batch) FROM stdin;
9	0001_01_01_000000_create_users_table	1
10	0001_01_01_000001_create_cache_table	1
11	0001_01_01_000002_create_jobs_table	1
12	2025_02_13_122341_insert_admin_user	1
13	2025_02_15_110945_create_media_item_table	1
14	2025_02_15_111217_create_tag_table	1
15	2025_02_15_111458_create_media_item_tag_join_table	1
16	2025_06_17_062836_create_blog_items_table	1
\.


--
-- Data for Name: password_reset_tokens; Type: TABLE DATA; Schema: public; Owner: willsm
--

COPY public.password_reset_tokens (email, token, created_at) FROM stdin;
\.


--
-- Data for Name: sessions; Type: TABLE DATA; Schema: public; Owner: willsm
--

COPY public.sessions (id, user_id, ip_address, user_agent, payload, last_activity) FROM stdin;
nsgh3fdW1hDKub0ecE0Sdx9pbUvvgyv7S9f729hb	\N	91.84.87.137	Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36	YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ2xkRXplc1hEVlViWVdBWk5TSFpUZjRhcVhmRGZyMEdwRjVoSzIwNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHBzOi8vd3d3LndpbGxzbS5vbmxpbmUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19	1751191240
tdqz2f3zufnJiZbDHAOqZJ0O1m2aJgTCadyB4ZZQ	\N	13.221.3.129	Mozilla/5.0 (Linux; Android 9; POCOPHONE F1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/76.0.3809.111 Mobile Safari/537.36	YTozOntzOjY6Il90b2tlbiI7czo0MDoibjl3OXQxZ1VkYk03UlJHeHozb1VwQ3pTQUxXaVM5ajh4YTNpQmJ5diI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vd2lsbHNtLm9ubGluZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=	1751193345
XsqUP6cTlGwGF1yOJ7Ixr5pxxGjHfcQEUCEmbl8o	\N	82.45.13.105	Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) CriOS/136 Version/11.1.1 Safari/605.1.15	YTozOntzOjY6Il90b2tlbiI7czo0MDoiYzQ2bnZ2TUNsb0gyeU9KTnhUejBMOUQ1WWV0SVhTaHloRmRMaWtLTCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHBzOi8vd2lsbHNtLm9ubGluZS9hcnQiO319	1751198358
bOMPttvUPLUHwPCn2rdCzQKaw5WQQfIhir35KAyC	\N	82.45.13.105	Mozilla/5.0 (iPhone; CPU iPhone OS 18_5_0 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) CriOS/136.0.7103.179 Mobile/15E148 Safari/604.1	YTozOntzOjY6Il90b2tlbiI7czo0MDoiTTRKdncwS1d5TzlVYWc2bGZLdG5zcjA3Z29aQmhjcGpVb0Q3a1JvUyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vd2lsbHNtLm9ubGluZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=	1751193823
S6n5VpmHtzZNV5L4ZejhIh9Tvjp60BYlN0V0Q7Kk	\N	82.45.13.105	Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36	YTozOntzOjY6Il90b2tlbiI7czo0MDoiWTBGMHR3NXV2SHJybW1hdmtOSWt5RWdxUDZaZm9qMUl4REtlbkl5UyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vd2lsbHNtLm9ubGluZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=	1751198403
67o0f7lVBgTVLvSLCnOda0EWvYv3dXwqKvcTcrnB	\N	139.59.148.66	Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/118.0	YTozOntzOjY6Il90b2tlbiI7czo0MDoiMEg3QTVZUUpSeXl0dWZQUUdVV0VYakh0bTRNb0lTcnZYNWdrQlpxQiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vMTY1LjIzMi40Ny4xMiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=	1751198813
SsPxT5ZzJX1jHJ2ECkLCeVUvnoNys5c5P9e65yuK	\N	91.84.87.137	Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Mobile Safari/537.36	YTozOntzOjY6Il90b2tlbiI7czo0MDoiY0Z0eGJWSVNlTXUzNUYySUc2VFdmQnZucmd2QmFLNjk0MnZSQTBaeSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vd2lsbHNtLm9ubGluZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=	1751191518
EWxefZf4PDByxfvpj2fzMNDkfquizoJDzmk7udSi	\N	82.45.13.105	Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/136.0.0.0 Safari/537.36	YTozOntzOjY6Il90b2tlbiI7czo0MDoiTXFiUXZOejFqUDhkcmtPaEtjVGtWbGNkRExjUzdLeUNleDZ1U2VENyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vd2lsbHNtLm9ubGluZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=	1751198819
Edz772TUxxCubAbe3jAswDHgh2gnoqgVWTzDbv4z	\N	149.57.180.49	Mozilla/5.0 (X11; Linux i686; rv:109.0) Gecko/20100101 Firefox/120.0	YTozOntzOjY6Il90b2tlbiI7czo0MDoiTlhrOG9ablhxamFxZDVkaUdNS2s4Q1lpbjU2ZDlQSHlWTG5NOGJUciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vd2lsbHNtLm9ubGluZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=	1751195350
02b4wXoDJp6MKy8QKJzhtVCEOvFMPStwNFEttfBH	\N	82.45.13.105	Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) CriOS/136 Version/11.1.1 Safari/605.1.15	YTozOntzOjY6Il90b2tlbiI7czo0MDoianVUTUpWQVNNbjFpOHhEMkRGUDlTSUpXdThZb3lqQWpXUktmdGRuYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vd2lsbHNtLm9ubGluZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=	1751193836
k2ixgPjDEYgnibmzfQYS86ixVxWebSpipVSD3chv	\N	162.216.150.110	Expanse, a Palo Alto Networks company, searches across the global IPv4 space multiple times per day to identify customers&#39; presences on the Internet. If you would like to be excluded from our scans, please send IP addresses/domains to: scaninfo@paloaltonetworks.com	YTozOntzOjY6Il90b2tlbiI7czo0MDoiT3dtZllkR21aajlxRDFHekFIM2U0T211UkM5WFRkR2ZKMHQyeVhZVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHBzOi8vMTY1LjIzMi40Ny4xMiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=	1751198084
\.


--
-- Data for Name: tag; Type: TABLE DATA; Schema: public; Owner: willsm
--

COPY public.tag (id, type, handle, created_at, updated_at, deleted_at) FROM stdin;
1	art	paper	\N	\N	\N
2	art	digital	\N	\N	\N
3	art	animation	\N	\N	\N
\.


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: willsm
--

COPY public.users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at) FROM stdin;
1	Will Roy	willjoroy@gmail.com	\N	$2y$12$r7PnhgBRB59uJ04u7ewF2.eSKrinpdC9bd.VK9gFNixho/YMV3LMq	8SufNilxCqP45jtVfKaTVsgXhaj85QpUYkR9vKkHHSOvXcEC1MarRl1TfLmV	\N	\N
\.


--
-- Name: blog_item_id_seq; Type: SEQUENCE SET; Schema: public; Owner: willsm
--

SELECT pg_catalog.setval('public.blog_item_id_seq', 1, true);


--
-- Name: failed_jobs_id_seq; Type: SEQUENCE SET; Schema: public; Owner: willsm
--

SELECT pg_catalog.setval('public.failed_jobs_id_seq', 1, false);


--
-- Name: jobs_id_seq; Type: SEQUENCE SET; Schema: public; Owner: willsm
--

SELECT pg_catalog.setval('public.jobs_id_seq', 1, false);


--
-- Name: media_item_id_seq; Type: SEQUENCE SET; Schema: public; Owner: willsm
--

SELECT pg_catalog.setval('public.media_item_id_seq', 22, true);


--
-- Name: migrations_id_seq; Type: SEQUENCE SET; Schema: public; Owner: willsm
--

SELECT pg_catalog.setval('public.migrations_id_seq', 16, true);


--
-- Name: tag_id_seq; Type: SEQUENCE SET; Schema: public; Owner: willsm
--

SELECT pg_catalog.setval('public.tag_id_seq', 1, false);


--
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: willsm
--

SELECT pg_catalog.setval('public.users_id_seq', 1, true);


--
-- Name: blog_item blog_item_pkey; Type: CONSTRAINT; Schema: public; Owner: willsm
--

ALTER TABLE ONLY public.blog_item
    ADD CONSTRAINT blog_item_pkey PRIMARY KEY (id);


--
-- Name: cache_locks cache_locks_pkey; Type: CONSTRAINT; Schema: public; Owner: willsm
--

ALTER TABLE ONLY public.cache_locks
    ADD CONSTRAINT cache_locks_pkey PRIMARY KEY (key);


--
-- Name: cache cache_pkey; Type: CONSTRAINT; Schema: public; Owner: willsm
--

ALTER TABLE ONLY public.cache
    ADD CONSTRAINT cache_pkey PRIMARY KEY (key);


--
-- Name: failed_jobs failed_jobs_pkey; Type: CONSTRAINT; Schema: public; Owner: willsm
--

ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_pkey PRIMARY KEY (id);


--
-- Name: failed_jobs failed_jobs_uuid_unique; Type: CONSTRAINT; Schema: public; Owner: willsm
--

ALTER TABLE ONLY public.failed_jobs
    ADD CONSTRAINT failed_jobs_uuid_unique UNIQUE (uuid);


--
-- Name: job_batches job_batches_pkey; Type: CONSTRAINT; Schema: public; Owner: willsm
--

ALTER TABLE ONLY public.job_batches
    ADD CONSTRAINT job_batches_pkey PRIMARY KEY (id);


--
-- Name: jobs jobs_pkey; Type: CONSTRAINT; Schema: public; Owner: willsm
--

ALTER TABLE ONLY public.jobs
    ADD CONSTRAINT jobs_pkey PRIMARY KEY (id);


--
-- Name: media_item media_item_pkey; Type: CONSTRAINT; Schema: public; Owner: willsm
--

ALTER TABLE ONLY public.media_item
    ADD CONSTRAINT media_item_pkey PRIMARY KEY (id);


--
-- Name: media_item_tag media_item_tag_pkey; Type: CONSTRAINT; Schema: public; Owner: willsm
--

ALTER TABLE ONLY public.media_item_tag
    ADD CONSTRAINT media_item_tag_pkey PRIMARY KEY (media_item_id, tag_id);


--
-- Name: migrations migrations_pkey; Type: CONSTRAINT; Schema: public; Owner: willsm
--

ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);


--
-- Name: password_reset_tokens password_reset_tokens_pkey; Type: CONSTRAINT; Schema: public; Owner: willsm
--

ALTER TABLE ONLY public.password_reset_tokens
    ADD CONSTRAINT password_reset_tokens_pkey PRIMARY KEY (email);


--
-- Name: sessions sessions_pkey; Type: CONSTRAINT; Schema: public; Owner: willsm
--

ALTER TABLE ONLY public.sessions
    ADD CONSTRAINT sessions_pkey PRIMARY KEY (id);


--
-- Name: tag tag_pkey; Type: CONSTRAINT; Schema: public; Owner: willsm
--

ALTER TABLE ONLY public.tag
    ADD CONSTRAINT tag_pkey PRIMARY KEY (id);


--
-- Name: users users_email_unique; Type: CONSTRAINT; Schema: public; Owner: willsm
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_unique UNIQUE (email);


--
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: willsm
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


--
-- Name: jobs_queue_index; Type: INDEX; Schema: public; Owner: willsm
--

CREATE INDEX jobs_queue_index ON public.jobs USING btree (queue);


--
-- Name: media_item_tag_media_item_id_index; Type: INDEX; Schema: public; Owner: willsm
--

CREATE INDEX media_item_tag_media_item_id_index ON public.media_item_tag USING btree (media_item_id);


--
-- Name: media_item_tag_tag_id_index; Type: INDEX; Schema: public; Owner: willsm
--

CREATE INDEX media_item_tag_tag_id_index ON public.media_item_tag USING btree (tag_id);


--
-- Name: sessions_last_activity_index; Type: INDEX; Schema: public; Owner: willsm
--

CREATE INDEX sessions_last_activity_index ON public.sessions USING btree (last_activity);


--
-- Name: sessions_user_id_index; Type: INDEX; Schema: public; Owner: willsm
--

CREATE INDEX sessions_user_id_index ON public.sessions USING btree (user_id);


--
-- Name: media_item_tag media_item_tag_media_item_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: willsm
--

ALTER TABLE ONLY public.media_item_tag
    ADD CONSTRAINT media_item_tag_media_item_id_foreign FOREIGN KEY (media_item_id) REFERENCES public.media_item(id) ON DELETE CASCADE;


--
-- Name: media_item_tag media_item_tag_tag_id_foreign; Type: FK CONSTRAINT; Schema: public; Owner: willsm
--

ALTER TABLE ONLY public.media_item_tag
    ADD CONSTRAINT media_item_tag_tag_id_foreign FOREIGN KEY (tag_id) REFERENCES public.tag(id) ON DELETE CASCADE;


--
-- PostgreSQL database dump complete
--

