<div align = center>

<img width = 300 src = docs/Logo-light.png#gh-dark-mode-only>
<img width = 300 src = docs/Logo.png#gh-light-mode-only> 
 
<br>
<br>

[![Badge License]][License]

Self-hosted **Javascript** emulation for various systems.

<br>

[![Button Website]][Website]
[![Button Usage]][Usage]<br>
[![Button Configurator]][Configurator]<br>
[![Button Demo]][Demo]<br>
[![Button Contributors]][Contributors]

Join our Discord server:

[![Join our Discord server!](https://invidget.switchblade.xyz/6akryGkETU)](https://discord.gg/6akryGkETU)

Or the Matrix server (#emulatorjs:matrix.emulatorjs.org):

<a href="https://matrix.to/#/#emulatorjs:matrix.emulatorjs.org" rel="noopener" target="_blank"><img src="https://matrix.to/img/matrix-badge.svg" alt="Chat on Matrix"></a>

</div>

<br>

## 🙌 Agradecimientos

Agradecemos el uso de **EmulatorJS**, una herramienta potente y flexible que permite la emulación de múltiples sistemas clásicos directamente desde el navegador utilizando JavaScript.  
Gracias a su desarrollo open-source y a su comunidad, este proyecto ha sido posible.

## 👥 Participantes del proyecto

Este proyecto fue desarrollado por:

- **Jose**
- **Diana**
- **Samuel**

Gracias por el compromiso, el trabajo en equipo y el aporte realizado durante el desarrollo del proyecto.

<br>

> [!NOTE]  
> **As of EmulatorJS version 4.0, this project is no longer a reverse-engineered version of the emulatorjs.com project. It is now a complete rewrite.**

> [!WARNING]  
> As of version 4.0.9 cores and minified files are no longer included in the repository. You will need to get them separately. You can get it from [releases](https://github.com/EmulatorJS/EmulatorJS/releases) or the * new CDN (see [this](#CDN) for more info). There is also a new version system that we will be using. (read [here](#Versioning) for more info).

> [!TIP]
> Cloning the repository is no longer recommended for production use. You should use [releases](https://github.com/EmulatorJS/EmulatorJS/releases) or the [CDN](https://cdn.emulatorjs.org/) instead.

<br>

### Ads

*This project has no ads.* <br>
*Although, the demo page currently has an ad to help fund this project.* <br>
*Ads on the demo page may come and go depending on how many people are* <br>
*funding this project.* <br>

*You can help fund this project on* ***[patreon]***

<br>

### Issues

*If something doesn't work, please consider opening an* ***[Issue]*** <br>
*with as many details as possible, as well as the console log.*

<br>

### 3rd Party Projects

EmulatorJS itself is built to be a plugin, rather than an entire website. This is why there is no docker container of this project. However, there are several projects you can use that use EmulatorJS!

Looking for projects that integrate EmulatorJS? Check out https://emulatorjs.org/docs/3rd-party

<br>

### Versioning

There are three different version names that you need to be aware of:

1. **stable** - This will be the most stable version of the emulator both code and cores will be tested before release. It will be updated every time a new version is released on GitHub. This is the default version on the Demo.
2. **latest** - This will contain the latest code but use the stable cores. This will be updated every time the *main* branch is updated.
3. **nightly** - This will contain the latest code and the latest cores. The cores will be updated every day, so this is considered alpha.

<br>

### CDN

**EmulatorJS provides a CDN** at `https://cdn.emulatorjs.org/`, allowing access to any version of the emulator.

To use it, set `EJS_pathtodata` to `https://cdn.emulatorjs.org/<version>/data/`, replacing `<version>` with `stable`, `latest`, `nightly`, or another main release.

Be sure to also update the `loader.js` path to:  
`https://cdn.emulatorjs.org/<version>/data/loader.js`

<br>

### Development:

*Run a local server with:* 

1. Open a terminal in the root of the project.
2. Install the dependencies with:
   ```sh
   npm i
