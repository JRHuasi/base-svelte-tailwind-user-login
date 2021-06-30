### Oh hai! ❤
We've created a new project called [**stackmix**](https://github.com/roxiness/stackmix). It's an experimental CLI that let's you customize new Routify templates. Go check it out!

---


# routify-starter

Starter template for [Routify](https://github.com/roxiness/routify).

### Get started

#### Starter templates
| Template                                  | Description                                                 |
|-------------------------------------------|-------------------------------------------------------------|
| [master](https://example.routify.dev/)    | Default template, includes examples folder                  |
| [blog](https://blog-example.routify.dev/) | Generates a blog from local markdown posts. Includes mdsvex |
| [auth](https://auth-example.routify.dev/) | Embedded login on protected pages. Includes Auth0           |

To use a template, run:

`npx @roxi/routify init`

or

`npx @roxi/routify init --branch <branch-name>`

The above commands will populate the current directory, they don't create a new one.

### npm scripts

| Syntax           | Description                                                                       |
|------------------|-----------------------------------------------------------------------------------|
| `dev`            | Development (port 5000)                                                           |
| `dev:nollup`     | Development with crazy fast rebuilds (port 5000)                                  |
| `dev-dynamic`    | Development with dynamic imports                                                  |
| `build`          | Build a bundled app with SSR + prerendering and dynamic imports                   |
| `serve`          | Run after a build to preview. Serves SPA on 5000 and SSR on 5005                  |
| `deploy:*`       | Deploy to netlify or now                                                          |
| `export`         | Create static pages from content in dist folder (used by `npm run build`)         |

### SSR and pre-rendering

SSR and pre-rendering are included in the default build process.

`npm run deploy:(now|netlify)` will deploy the app with SSR and prerendering included.

To render async data, call the `$ready()` helper whenever your data is ready.

If $ready() is present, rendering will be delayed till the function has been called.

Otherwise it will be rendered instantly.

See [src/pages/example/api/[showId].svelte](https://github.com/roxiness/routify-starter/blob/master/src/pages/example/api/%5BshowId%5D.svelte) for an example.

### Production

* For SPA or SSR apps please make sure that url rewrite is enabled on the server.
* For SPA redirect to `__app.html`.
* For SSR redirect to the lambda function or express server.

### Typescript

For Typescript, we recommend [@lamualfa](https://github.com/lamualfa) excellent [routify-ts](https://github.com/lamualfa/routify-ts/)

New project: `npx routify-ts init <project-name> [routify-init-args]`

Existing project: `npx routify-ts convert [project-directory]`


### Issues?

File on Github! See https://github.com/sveltech/routify/issues .

Portal definitivo para Construcciones Escolares

Tutoriales

[Coders Page - API with Svelte](https://www.youtube.com/playlist?list=PLh7PNLbTepP94NqlzNvEQGUlxu8dZXN8U)

Table usuarios
--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `UserID` int NOT NULL,
  `UserUsuario` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `clave` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `UserClave` varchar(500) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `UserTipo` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1:Admin',
  `UserNombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `UserApellido` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci DEFAULT NULL,
  `UserFechaAlta` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UserIP` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `UserUltimoAcceso` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `UserNotas` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  `UserAvatar` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL DEFAULT 'usuario-avatar.jpg',
  `UserActivo` tinyint(1) DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `UserID` (`UserID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `UserID` int NOT NULL AUTO_INCREMENT;
COMMIT;

GitHub (https://github.com/JRHuasi/base-svelte-tailwind-user-login.git)