<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: socket_shutdown - Manual</title>

      <link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
      <link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">
  
 <link rel="icon" type="image/svg+xml" sizes="any" href="https://www.php.net/favicon.svg?v=2">
 <link rel="icon" type="image/png" sizes="196x196" href="https://www.php.net/favicon-196x196.png?v=2">
 <link rel="icon" type="image/png" sizes="32x32" href="https://www.php.net/favicon-32x32.png?v=2">
 <link rel="icon" type="image/png" sizes="16x16" href="https://www.php.net/favicon-16x16.png?v=2">
 <link rel="shortcut icon" href="https://www.php.net/favicon.ico?v=2">

 <link rel="search" type="application/opensearchdescription+xml" href="https://www.php.net/phpnetimprovedsearch.src" title="Add PHP.net search">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/releases/feed.php" title="PHP Release feed">
 <link rel="alternate" type="application/atom+xml" href="https://www.php.net/feed.atom" title="PHP: Hypertext Preprocessor">

 <link rel="canonical" href="https://www.php.net/manual/en/function.socket-shutdown.php">
 <link rel="shorturl" href="https://www.php.net/socket-shutdown">
 <link rel="alternate" href="https://www.php.net/socket-shutdown" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.sockets.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.socket-setopt.php">
 <link rel="next" href="https://www.php.net/manual/en/function.socket-strerror.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.socket-shutdown.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.socket-shutdown.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.socket-shutdown.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.socket-shutdown.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.socket-shutdown.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.socket-shutdown.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.socket-shutdown.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.socket-shutdown.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.socket-shutdown.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.socket-shutdown.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.socket-shutdown.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Shuts down a socket for receiving, sending, or both" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: socket_shutdown - Manual" />
<meta name="twitter:description" content="Shuts down a socket for receiving, sending, or both" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: socket_shutdown - Manual" />
<meta itemprop="description" content="Shuts down a socket for receiving, sending, or both" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Shuts down a socket for receiving, sending, or both" />

<link href="https://fosstodon.org/@php" rel="me" />
<!-- Matomo -->
<script>
    var _paq = window._paq = window._paq || [];
    /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
    _paq.push(["setDoNotTrack", true]);
    _paq.push(["disableCookies"]);
    _paq.push(['trackPageView']);
    _paq.push(['enableLinkTracking']);
    (function() {
        var u="https://analytics.php.net/";
        _paq.push(['setTrackerUrl', u+'matomo.php']);
        _paq.push(['setSiteId', '1']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
    })();
</script>
<!-- End Matomo Code -->
</head>
<body class="docs ">

<nav class="navbar navbar-fixed-top">
  <div class="navbar__inner">
    <a href="/" aria-label="PHP Home" class="navbar__brand">
      <img
        src="/images/logos/php-logo-white.svg"
        aria-hidden="true"
        width="80"
        height="40"
      >
    </a>

    <div
      id="navbar__offcanvas"
      tabindex="-1"
      class="navbar__offcanvas"
      aria-label="Menu"
    >
      <button
        id="navbar__close-button"
        class="navbar__icon-item navbar_icon-item--visually-aligned navbar__close-button"
      >
        <svg xmlns="http://www.w3.org/2000/svg" width="24" viewBox="0 0 24 24" fill="currentColor"><path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" /></svg>
      </button>

      <ul class="navbar__nav">
                            <li class="navbar__item">
              <a
                href="/downloads.php"
                                class="navbar__link  "
              >
                                  Downloads                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/docs.php"
                aria-current="page"                class="navbar__link navbar__link--active "
              >
                                  Documentation                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/get-involved.php"
                                class="navbar__link  "
              >
                                  Get Involved                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/support.php"
                                class="navbar__link  "
              >
                                  Help                              </a>
          </li>
                            <li class="navbar__item">
              <a
                href="/releases/8.4/index.php"
                                class="navbar__link  navbar__release"
              >
                                  <img src="/images/php8/logo_php8_4.svg" alt="PHP 8.4">
                              </a>
          </li>
              </ul>
    </div>

    <div class="navbar__right">
      
      <!-- Desktop default search -->
      <form
        action="/manual-lookup.php"
        class="navbar__search-form"
      >
        <label for="navbar__search-input" aria-label="Search docs">
          <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>        </label>
        <input
          type="search"
          name="pattern"
          id="navbar__search-input"
          class="navbar__search-input"
          placeholder="Search docs"
          accesskey="s"
        >
        <input type="hidden" name="scope" value="quickref">
      </form>

      <!-- Desktop encanced search -->
      <button
        id="navbar__search-button"
        class="navbar__search-button"
        hidden
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>        Search docs
      </button>

      <!-- Mobile default items -->
      <a
        id="navbar__search-link"
        href="/lookup-form.php"
        aria-label="Search docs"
        class="navbar__icon-item navbar__search-link"
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>      </a>
      <a
        id="navbar__menu-link"
        href="/menu.php"
        aria-label="Menu"
        class="navbar__icon-item navbar_icon-item--visually-aligned navbar_menu-link"
      >
        <svg xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="currentColor"
>
  <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
</svg>      </a>

      <!-- Mobile enhanced items -->
      <button
        id="navbar__search-button-mobile"
        aria-label="Search docs"
        class="navbar__icon-item navbar__search-button-mobile"
        hidden
      >
        <svg
  xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="none"
  stroke="currentColor"
  stroke-width="2"
  stroke-linecap="round"
  stroke-linejoin="round"
>
  <circle cx="11" cy="11" r="8"></circle>
  <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
</svg>      </button>
      <button
        id="navbar__menu-button"
        aria-label="Menu"
        class="navbar__icon-item navbar_icon-item--visually-aligned"
        hidden
      >
        <svg xmlns="http://www.w3.org/2000/svg"
  aria-hidden="true"
  width="24"
  viewBox="0 0 24 24"
  fill="currentColor"
>
  <path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
</svg>      </button>
    </div>

    <div
      id="navbar__backdrop"
      class="navbar__backdrop"
    ></div>
  </div>

  <div id="flash-message"></div>
</nav>
<div class="headsup"><a href='/index.php#2025-09-25-3'>PHP 8.5.0 RC 1 available for testing</a></div>
<nav id="trick"><div><dl>
<dt><a href='/manual/en/getting-started.php'>Getting Started</a></dt>
	<dd><a href='/manual/en/introduction.php'>Introduction</a></dd>
	<dd><a href='/manual/en/tutorial.php'>A simple tutorial</a></dd>
<dt><a href='/manual/en/langref.php'>Language Reference</a></dt>
	<dd><a href='/manual/en/language.basic-syntax.php'>Basic syntax</a></dd>
	<dd><a href='/manual/en/language.types.php'>Types</a></dd>
	<dd><a href='/manual/en/language.variables.php'>Variables</a></dd>
	<dd><a href='/manual/en/language.constants.php'>Constants</a></dd>
	<dd><a href='/manual/en/language.expressions.php'>Expressions</a></dd>
	<dd><a href='/manual/en/language.operators.php'>Operators</a></dd>
	<dd><a href='/manual/en/language.control-structures.php'>Control Structures</a></dd>
	<dd><a href='/manual/en/language.functions.php'>Functions</a></dd>
	<dd><a href='/manual/en/language.oop5.php'>Classes and Objects</a></dd>
	<dd><a href='/manual/en/language.namespaces.php'>Namespaces</a></dd>
	<dd><a href='/manual/en/language.enumerations.php'>Enumerations</a></dd>
	<dd><a href='/manual/en/language.errors.php'>Errors</a></dd>
	<dd><a href='/manual/en/language.exceptions.php'>Exceptions</a></dd>
	<dd><a href='/manual/en/language.fibers.php'>Fibers</a></dd>
	<dd><a href='/manual/en/language.generators.php'>Generators</a></dd>
	<dd><a href='/manual/en/language.attributes.php'>Attributes</a></dd>
	<dd><a href='/manual/en/language.references.php'>References Explained</a></dd>
	<dd><a href='/manual/en/reserved.variables.php'>Predefined Variables</a></dd>
	<dd><a href='/manual/en/reserved.exceptions.php'>Predefined Exceptions</a></dd>
	<dd><a href='/manual/en/reserved.interfaces.php'>Predefined Interfaces and Classes</a></dd>
	<dd><a href='/manual/en/reserved.attributes.php'>Predefined Attributes</a></dd>
	<dd><a href='/manual/en/context.php'>Context options and parameters</a></dd>
	<dd><a href='/manual/en/wrappers.php'>Supported Protocols and Wrappers</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/security.php'>Security</a></dt>
	<dd><a href='/manual/en/security.intro.php'>Introduction</a></dd>
	<dd><a href='/manual/en/security.general.php'>General considerations</a></dd>
	<dd><a href='/manual/en/security.cgi-bin.php'>Installed as CGI binary</a></dd>
	<dd><a href='/manual/en/security.apache.php'>Installed as an Apache module</a></dd>
	<dd><a href='/manual/en/security.sessions.php'>Session Security</a></dd>
	<dd><a href='/manual/en/security.filesystem.php'>Filesystem Security</a></dd>
	<dd><a href='/manual/en/security.database.php'>Database Security</a></dd>
	<dd><a href='/manual/en/security.errors.php'>Error Reporting</a></dd>
	<dd><a href='/manual/en/security.variables.php'>User Submitted Data</a></dd>
	<dd><a href='/manual/en/security.hiding.php'>Hiding PHP</a></dd>
	<dd><a href='/manual/en/security.current.php'>Keeping Current</a></dd>
<dt><a href='/manual/en/features.php'>Features</a></dt>
	<dd><a href='/manual/en/features.http-auth.php'>HTTP authentication with PHP</a></dd>
	<dd><a href='/manual/en/features.cookies.php'>Cookies</a></dd>
	<dd><a href='/manual/en/features.sessions.php'>Sessions</a></dd>
	<dd><a href='/manual/en/features.file-upload.php'>Handling file uploads</a></dd>
	<dd><a href='/manual/en/features.remote-files.php'>Using remote files</a></dd>
	<dd><a href='/manual/en/features.connection-handling.php'>Connection handling</a></dd>
	<dd><a href='/manual/en/features.persistent-connections.php'>Persistent Database Connections</a></dd>
	<dd><a href='/manual/en/features.commandline.php'>Command line usage</a></dd>
	<dd><a href='/manual/en/features.gc.php'>Garbage Collection</a></dd>
	<dd><a href='/manual/en/features.dtrace.php'>DTrace Dynamic Tracing</a></dd>
</dl>
<dl>
<dt><a href='/manual/en/funcref.php'>Function Reference</a></dt>
	<dd><a href='/manual/en/refs.basic.php.php'>Affecting PHP's Behaviour</a></dd>
	<dd><a href='/manual/en/refs.utilspec.audio.php'>Audio Formats Manipulation</a></dd>
	<dd><a href='/manual/en/refs.remote.auth.php'>Authentication Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.cmdline.php'>Command Line Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.compression.php'>Compression and Archive Extensions</a></dd>
	<dd><a href='/manual/en/refs.crypto.php'>Cryptography Extensions</a></dd>
	<dd><a href='/manual/en/refs.database.php'>Database Extensions</a></dd>
	<dd><a href='/manual/en/refs.calendar.php'>Date and Time Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.file.php'>File System Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.international.php'>Human Language and Character Encoding Support</a></dd>
	<dd><a href='/manual/en/refs.utilspec.image.php'>Image Processing and Generation</a></dd>
	<dd><a href='/manual/en/refs.remote.mail.php'>Mail Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.math.php'>Mathematical Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.nontext.php'>Non-Text MIME Output</a></dd>
	<dd><a href='/manual/en/refs.fileprocess.process.php'>Process Control Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.other.php'>Other Basic Extensions</a></dd>
	<dd><a href='/manual/en/refs.remote.other.php'>Other Services</a></dd>
	<dd><a href='/manual/en/refs.search.php'>Search Engine Extensions</a></dd>
	<dd><a href='/manual/en/refs.utilspec.server.php'>Server Specific Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.session.php'>Session Extensions</a></dd>
	<dd><a href='/manual/en/refs.basic.text.php'>Text Processing</a></dd>
	<dd><a href='/manual/en/refs.basic.vartype.php'>Variable and Type Related Extensions</a></dd>
	<dd><a href='/manual/en/refs.webservice.php'>Web Services</a></dd>
	<dd><a href='/manual/en/refs.utilspec.windows.php'>Windows Only Extensions</a></dd>
	<dd><a href='/manual/en/refs.xml.php'>XML Manipulation</a></dd>
	<dd><a href='/manual/en/refs.ui.php'>GUI Extensions</a></dd>
</dl>
<dl>
<dt>Keyboard Shortcuts</dt><dt>?</dt>
<dd>This help</dd>
<dt>j</dt>
<dd>Next menu item</dd>
<dt>k</dt>
<dd>Previous menu item</dd>
<dt>g p</dt>
<dd>Previous man page</dd>
<dt>g n</dt>
<dd>Next man page</dd>
<dt>G</dt>
<dd>Scroll to bottom</dd>
<dt>g g</dt>
<dd>Scroll to top</dd>
<dt>g h</dt>
<dd>Goto homepage</dd>
<dt>g s</dt>
<dd>Goto search<br>(current page)</dd>
<dt>/</dt>
<dd>Focus search box</dd>
</dl></div></nav>
<div id="goto">
    <div class="search">
         <div class="text"></div>
         <div class="results"><ul></ul></div>
   </div>
</div>

  <div id="breadcrumbs" class="clearfix">
    <div id="breadcrumbs-inner">
          <div class="next">
        <a href="function.socket-strerror.php">
          socket_strerror &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.socket-setopt.php">
          &laquo; socket_setopt        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.sockets.php'>Sockets</a></li>      <li><a href='ref.sockets.php'>Socket Functions</a></li>      </ul>
    </div>
  </div>




<div id="layout" class="clearfix">
  <section id="layout-content">
  <div class="page-tools">
    <div class="change-language">
      <form action="/manual/change.php" method="get" id="changelang" name="changelang">
        <fieldset>
          <label for="changelang-langs">Change language:</label>
          <select onchange="document.changelang.submit()" name="page" id="changelang-langs">
            <option value='en/function.socket-shutdown.php' selected="selected">English</option>
            <option value='de/function.socket-shutdown.php'>German</option>
            <option value='es/function.socket-shutdown.php'>Spanish</option>
            <option value='fr/function.socket-shutdown.php'>French</option>
            <option value='it/function.socket-shutdown.php'>Italian</option>
            <option value='ja/function.socket-shutdown.php'>Japanese</option>
            <option value='pt_BR/function.socket-shutdown.php'>Brazilian Portuguese</option>
            <option value='ru/function.socket-shutdown.php'>Russian</option>
            <option value='tr/function.socket-shutdown.php'>Turkish</option>
            <option value='uk/function.socket-shutdown.php'>Ukrainian</option>
            <option value='zh/function.socket-shutdown.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.socket-shutdown" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">socket_shutdown</h1>
  <p class="verinfo">(PHP 4 &gt;= 4.1.0, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">socket_shutdown</span> &mdash; <span class="dc-title">Shuts down a socket for receiving, sending, or both</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.socket-shutdown-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>socket_shutdown</strong></span>(<span class="methodparam"><span class="type"><a href="class.socket.php" class="type Socket">Socket</a></span> <code class="parameter">$socket</code></span>, <span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$mode</code><span class="initializer"> = 2</span></span>): <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span></div>

  <p class="para rdfs-comment">
   The <span class="function"><strong>socket_shutdown()</strong></span> function allows you to stop
   incoming, outgoing or all data (the default) from being sent through the
   <code class="parameter">socket</code>
  </p>
  <blockquote class="note"><p><strong class="note">Note</strong>: 
   <p class="para">
    The associated buffer, or buffers, may or may not be emptied.
   </p>
  </p></blockquote>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.socket-shutdown-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">socket</code></dt>
     <dd>
      <p class="para">
       A <span class="classname"><a href="class.socket.php" class="classname">Socket</a></span> instance created with <span class="function"><a href="function.socket-create.php" class="function">socket_create()</a></span>.
      </p>
     </dd>
    
    
     <dt><code class="parameter">mode</code></dt>
     <dd>
      <p class="para">
       The value of <code class="parameter">mode</code> can be one of the following:
       <table class="doctable table">
        <caption><strong>possible values for <code class="parameter">mode</code></strong></caption>
        
         <tbody class="tbody">
          <tr>
           <td><code class="literal">0</code></td>
           <td>
            Shutdown socket reading
           </td>
          </tr>

          <tr>
           <td><code class="literal">1</code></td>
           <td>
            Shutdown socket writing
           </td>
          </tr>

          <tr>
           <td><code class="literal">2</code></td>
           <td>
            Shutdown socket reading and writing
           </td>
          </tr>

         </tbody>
        
       </table>

      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.socket-shutdown-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong> on success or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.socket-shutdown-changelog">
  <h3 class="title">Changelog</h3>
  <table class="doctable informaltable">
   
    <thead>
     <tr>
      <th>Version</th>
      <th>Description</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
  <td>8.0.0</td>
  <td>
   <code class="parameter">socket</code> is a <span class="classname"><a href="class.socket.php" class="classname">Socket</a></span> instance now;
   previously, it was a <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>.
  </td>
 </tr>

    </tbody>
   
  </table>

 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/sockets/functions/socket-shutdown.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.socket-shutdown%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.socket-shutdown&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.socket-shutdown.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="56447">  <div class="votes">
    <div id="Vu56447">
    <a href="/manual/vote-note.php?id=56447&amp;page=function.socket-shutdown&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd56447">
    <a href="/manual/vote-note.php?id=56447&amp;page=function.socket-shutdown&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V56447" title="64% like this...">
    4
    </div>
  </div>
  <a href="#56447" class="name">
  <strong class="user"><em>ludvig dot ericson at gmail dot com</em></strong></a><a class="genanchor" href="#56447"> &para;</a><div class="date" title="2005-09-02 01:13"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom56447">
<div class="phpcode"><code><span class="html">Sockets should be first shutdown and then closed.<br /><span class="default">&lt;?php<br /></span><span class="comment">// Sample: Closing sockets gracefully<br /></span><span class="default">socket_shutdown</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">);<br /></span><span class="default">socket_close</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="127978">  <div class="votes">
    <div id="Vu127978">
    <a href="/manual/vote-note.php?id=127978&amp;page=function.socket-shutdown&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127978">
    <a href="/manual/vote-note.php?id=127978&amp;page=function.socket-shutdown&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127978" title="100% like this...">
    2
    </div>
  </div>
  <a href="#127978" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#127978"> &para;</a><div class="date" title="2022-12-04 07:29"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom127978">
<div class="phpcode"><code><span class="html">Shutting down is a formality two peers can do before closing their connections. It's not required, but it can help assert your I/O procedures, so it's useful.<br /><br />If writing is shut down, trying to send will result in a pipe error, and the remote peer will read an empty string after receiving all other pending data.<br /><br />If reading is shut down, trying to receive will return an empty string, and the remote peer will get a pipe error if they try to send.<br /><br />Writing should be shut down first between two peers. Remaining data should then be read and handled. If anything is sent at this point it should be a "goodbye" (nothing that requires the remote peer to write back to you). Finally, reading can be shut down.<br /><br />Selection on a shut down channel will always succeed. Similarly, the remote peer will always succeed at selecting the opposite channel.</span></code></div>
  </div>
 </div>
  <div class="note" id="123752">  <div class="votes">
    <div id="Vu123752">
    <a href="/manual/vote-note.php?id=123752&amp;page=function.socket-shutdown&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123752">
    <a href="/manual/vote-note.php?id=123752&amp;page=function.socket-shutdown&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123752" title="100% like this...">
    2
    </div>
  </div>
  <a href="#123752" class="name">
  <strong class="user"><em>renmengyang567 at gmail dot com</em></strong></a><a class="genanchor" href="#123752"> &para;</a><div class="date" title="2019-04-07 09:24"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123752">
<div class="phpcode"><code><span class="html">&lt;explain&gt;<br />In this case, the TCP client is gracefully disconnected from the server<br /><br /><span class="default">&lt;?php<br /><br />define</span><span class="keyword">(</span><span class="string">'BUF_SIZE'</span><span class="keyword">,</span><span class="default">10</span><span class="keyword">);<br /><br /></span><span class="comment">// create for tcp<br /></span><span class="default">$sock </span><span class="keyword">= </span><span class="default">socket_create</span><span class="keyword">(</span><span class="default">AF_INET</span><span class="keyword">, </span><span class="default">SOCK_STREAM</span><span class="keyword">, </span><span class="default">getprotobyname</span><span class="keyword">(</span><span class="string">'tcp'</span><span class="keyword">));<br /></span><span class="default">socket_bind</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">, </span><span class="string">'127.0.0.1'</span><span class="keyword">,</span><span class="default">5200</span><span class="keyword">);<br /></span><span class="default">socket_listen</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">,</span><span class="default">1024</span><span class="keyword">);<br /></span><span class="default">$fp </span><span class="keyword">= </span><span class="default">fopen</span><span class="keyword">(</span><span class="string">'./socket_shutdown.php'</span><span class="keyword">,</span><span class="string">'rb'</span><span class="keyword">);<br /></span><span class="default">$clnt_sock </span><span class="keyword">= </span><span class="default">socket_accept</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">);<br /><br />while(!</span><span class="default">feof</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">)) {<br />   </span><span class="default">$str </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$fp</span><span class="keyword">,</span><span class="default">BUF_SIZE</span><span class="keyword">);<br />   </span><span class="default">socket_write</span><span class="keyword">(</span><span class="default">$clnt_sock</span><span class="keyword">,</span><span class="default">$str</span><span class="keyword">,</span><span class="default">BUF_SIZE</span><span class="keyword">);<br />} <br /><br /></span><span class="default">$eof </span><span class="keyword">= </span><span class="string">"\n"</span><span class="keyword">;<br /></span><span class="default">socket_write</span><span class="keyword">(</span><span class="default">$clnt_sock</span><span class="keyword">,</span><span class="default">$eof</span><span class="keyword">,</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$eof</span><span class="keyword">));<br /><br /></span><span class="comment">//disconnect output stream(断开输入流)<br /></span><span class="default">socket_shutdown</span><span class="keyword">(</span><span class="default">$clnt_sock</span><span class="keyword">,</span><span class="default">1</span><span class="keyword">);<br /></span><span class="default">$ret </span><span class="keyword">= </span><span class="default">socket_read</span><span class="keyword">(</span><span class="default">$clnt_sock</span><span class="keyword">, </span><span class="default">100</span><span class="keyword">);<br /></span><span class="default">printf</span><span class="keyword">(</span><span class="string">"Message from client:%s\n"</span><span class="keyword">,</span><span class="default">$ret</span><span class="keyword">);<br /></span><span class="default">socket_close</span><span class="keyword">(</span><span class="default">$clnt_sock</span><span class="keyword">);<br /></span><span class="default">socket_close</span><span class="keyword">(</span><span class="default">$sock</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span><br /><span class="default">&lt;?php<br /></span><span class="comment">// for tcp-client <br /></span><span class="default">$clnt_sock </span><span class="keyword">= </span><span class="default">socket_create</span><span class="keyword">(</span><span class="default">AF_INET</span><span class="keyword">, </span><span class="default">SOCK_STREAM</span><span class="keyword">, </span><span class="default">getprotobyname</span><span class="keyword">(</span><span class="string">'tcp'</span><span class="keyword">));<br /></span><span class="default">socket_connect</span><span class="keyword">(</span><span class="default">$clnt_sock</span><span class="keyword">, </span><span class="string">'127.0.0.1'</span><span class="keyword">, </span><span class="default">5200</span><span class="keyword">);<br />while ((</span><span class="default">$cnt</span><span class="keyword">= @</span><span class="default">socket_read</span><span class="keyword">(</span><span class="default">$clnt_sock</span><span class="keyword">, </span><span class="default">10</span><span class="keyword">,</span><span class="default">PHP_NORMAL_READ</span><span class="keyword">)) !==</span><span class="default">false</span><span class="keyword">) {<br />   </span><span class="default">file_put_contents</span><span class="keyword">(</span><span class="string">'./receive.data'</span><span class="keyword">,</span><span class="default">$cnt</span><span class="keyword">,</span><span class="default">FILE_APPEND</span><span class="keyword">);<br />}<br />print </span><span class="string">"receive file data"</span><span class="keyword">.</span><span class="default">PHP_EOL</span><span class="keyword">;<br /></span><span class="default">socket_write</span><span class="keyword">(</span><span class="default">$clnt_sock</span><span class="keyword">, </span><span class="string">"Tank you"</span><span class="keyword">);<br /></span><span class="default">socket_close</span><span class="keyword">(</span><span class="default">$clnt_sock</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="59003">  <div class="votes">
    <div id="Vu59003">
    <a href="/manual/vote-note.php?id=59003&amp;page=function.socket-shutdown&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd59003">
    <a href="/manual/vote-note.php?id=59003&amp;page=function.socket-shutdown&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V59003" title="52% like this...">
    1
    </div>
  </div>
  <a href="#59003" class="name">
  <strong class="user"><em>richard dot thomas at psysolutions dot com</em></strong></a><a class="genanchor" href="#59003"> &para;</a><div class="date" title="2005-11-23 10:20"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom59003">
<div class="phpcode"><code><span class="html">That is not a good example of a graceful shutdown. One should close the sending side of the socket and continue to read until the remote end closes its sending connection.</span></code></div>
  </div>
 </div>
  <div class="note" id="99956">  <div class="votes">
    <div id="Vu99956">
    <a href="/manual/vote-note.php?id=99956&amp;page=function.socket-shutdown&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd99956">
    <a href="/manual/vote-note.php?id=99956&amp;page=function.socket-shutdown&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V99956" title="43% like this...">
    -2
    </div>
  </div>
  <a href="#99956" class="name">
  <strong class="user"><em>recycling dot sp dot am at gmail dot com</em></strong></a><a class="genanchor" href="#99956"> &para;</a><div class="date" title="2010-09-16 09:09"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom99956">
<div class="phpcode"><code><span class="html">Shutdown and SOL_TCP:<br /><span class="default">&lt;?php<br />$a</span><span class="keyword">= </span><span class="default">socket_create</span><span class="keyword">(</span><span class="default">AF_INET</span><span class="keyword">, </span><span class="default">SOCK_STREAM</span><span class="keyword">, </span><span class="default">SOL_TCP</span><span class="keyword">);<br /></span><span class="default">socket_shutdown</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">)<br /></span><span class="default">?&gt;<br /></span>PHP Warning:  socket_shutdown(): unable to shutdown socket [107]: Transport endpoint is not connected <br /><br />Shutdown and SOL_UDP:<br /><span class="default">&lt;?php<br />$a</span><span class="keyword">= </span><span class="default">socket_create</span><span class="keyword">(</span><span class="default">AF_INET</span><span class="keyword">, </span><span class="default">SOCK_STREAM</span><span class="keyword">, </span><span class="default">SOL_UDP</span><span class="keyword">);<br /></span><span class="default">socket_shutdown</span><span class="keyword">(</span><span class="default">$a</span><span class="keyword">, </span><span class="default">2</span><span class="keyword">)<br /></span><span class="default">?&gt;<br /></span>PHP Warning:  socket_shutdown(): unable to shutdown socket [107]: Transport endpoint is not connected <br /><br />Conclusion: if you are not actually connected, shutdown will fails with socket_error = 107, Transport endpoint is not connected. This is true for both TPC and UDP connection (which is suprising, UDP being a connectionless protocol). This is true no matter the value set for the how parameter.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.socket-shutdown&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.socket-shutdown.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.sockets.php">Socket Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.socket-accept.php" title="socket_&#8203;accept">socket_&#8203;accept</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-addrinfo-bind.php" title="socket_&#8203;addrinfo_&#8203;bind">socket_&#8203;addrinfo_&#8203;bind</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-addrinfo-connect.php" title="socket_&#8203;addrinfo_&#8203;connect">socket_&#8203;addrinfo_&#8203;connect</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-addrinfo-explain.php" title="socket_&#8203;addrinfo_&#8203;explain">socket_&#8203;addrinfo_&#8203;explain</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-addrinfo-lookup.php" title="socket_&#8203;addrinfo_&#8203;lookup">socket_&#8203;addrinfo_&#8203;lookup</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-atmark.php" title="socket_&#8203;atmark">socket_&#8203;atmark</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-bind.php" title="socket_&#8203;bind">socket_&#8203;bind</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-clear-error.php" title="socket_&#8203;clear_&#8203;error">socket_&#8203;clear_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-close.php" title="socket_&#8203;close">socket_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-cmsg-space.php" title="socket_&#8203;cmsg_&#8203;space">socket_&#8203;cmsg_&#8203;space</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-connect.php" title="socket_&#8203;connect">socket_&#8203;connect</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-create.php" title="socket_&#8203;create">socket_&#8203;create</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-create-listen.php" title="socket_&#8203;create_&#8203;listen">socket_&#8203;create_&#8203;listen</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-create-pair.php" title="socket_&#8203;create_&#8203;pair">socket_&#8203;create_&#8203;pair</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-export-stream.php" title="socket_&#8203;export_&#8203;stream">socket_&#8203;export_&#8203;stream</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-get-option.php" title="socket_&#8203;get_&#8203;option">socket_&#8203;get_&#8203;option</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-getopt.php" title="socket_&#8203;getopt">socket_&#8203;getopt</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-getpeername.php" title="socket_&#8203;getpeername">socket_&#8203;getpeername</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-getsockname.php" title="socket_&#8203;getsockname">socket_&#8203;getsockname</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-import-stream.php" title="socket_&#8203;import_&#8203;stream">socket_&#8203;import_&#8203;stream</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-last-error.php" title="socket_&#8203;last_&#8203;error">socket_&#8203;last_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-listen.php" title="socket_&#8203;listen">socket_&#8203;listen</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-read.php" title="socket_&#8203;read">socket_&#8203;read</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-recv.php" title="socket_&#8203;recv">socket_&#8203;recv</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-recvfrom.php" title="socket_&#8203;recvfrom">socket_&#8203;recvfrom</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-recvmsg.php" title="socket_&#8203;recvmsg">socket_&#8203;recvmsg</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-select.php" title="socket_&#8203;select">socket_&#8203;select</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-send.php" title="socket_&#8203;send">socket_&#8203;send</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-sendmsg.php" title="socket_&#8203;sendmsg">socket_&#8203;sendmsg</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-sendto.php" title="socket_&#8203;sendto">socket_&#8203;sendto</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-set-block.php" title="socket_&#8203;set_&#8203;block">socket_&#8203;set_&#8203;block</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-set-nonblock.php" title="socket_&#8203;set_&#8203;nonblock">socket_&#8203;set_&#8203;nonblock</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-set-option.php" title="socket_&#8203;set_&#8203;option">socket_&#8203;set_&#8203;option</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-setopt.php" title="socket_&#8203;setopt">socket_&#8203;setopt</a>
                        </li>
                                                <li class="current">
                            <a href="function.socket-shutdown.php" title="socket_&#8203;shutdown">socket_&#8203;shutdown</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-strerror.php" title="socket_&#8203;strerror">socket_&#8203;strerror</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-write.php" title="socket_&#8203;write">socket_&#8203;write</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-wsaprotocol-info-export.php" title="socket_&#8203;wsaprotocol_&#8203;info_&#8203;export">socket_&#8203;wsaprotocol_&#8203;info_&#8203;export</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-wsaprotocol-info-import.php" title="socket_&#8203;wsaprotocol_&#8203;info_&#8203;import">socket_&#8203;wsaprotocol_&#8203;info_&#8203;import</a>
                        </li>
                                                <li class="">
                            <a href="function.socket-wsaprotocol-info-release.php" title="socket_&#8203;wsaprotocol_&#8203;info_&#8203;release">socket_&#8203;wsaprotocol_&#8203;info_&#8203;release</a>
                        </li>
                        
                    </ul>
                
            </li>
                        
                    </ul>
    </aside>


  </div><!-- layout -->

  <footer>
    <div class="container footer-content">
      <div class="row-fluid">
      <ul class="footmenu">
        <li><a href="/manual/en/copyright.php">Copyright &copy; 2001-2025 The PHP Documentation Group</a></li>
        <li><a href="/my.php">My PHP.net</a></li>
        <li><a href="/contact.php">Contact</a></li>
        <li><a href="/sites.php">Other PHP.net sites</a></li>
        <li><a href="/privacy.php">Privacy policy</a></li>
      </ul>
      </div>
    </div>
  </footer>

    
<script src="/manual/en/js/ext/jquery-3.6.0.min.js"></script>
<script src="/manual/en/js/ext/FuzzySearch.min.js"></script>
<script src="/manual/en/js/ext/mousetrap.min.js"></script>
<script src="/manual/en/js/ext/jquery.scrollTo.min.js"></script>
<script src="/manual/en/js/search.js"></script>
<script src="/manual/en/js/common.js"></script>
<script type="module" src="/manual/en/js/interactive-examples.js"></script>

<a id="toTop" href="javascript:;"><span id="toTopHover"></span><img width="40" height="40" alt="To Top" src="/images/to-top@2x.png"></a>

<div id="search-modal__backdrop" class="search-modal__backdrop">
  <div
    role="dialog"
    aria-label="Search modal"
    id="search-modal"
    class="search-modal"
  >
    <div class="search-modal__header">
      <div class="search-modal__form">
        <div class="search-modal__input-icon">
          <!-- https://feathericons.com search -->
          <svg xmlns="http://www.w3.org/2000/svg"
            aria-hidden="true"
            width="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <circle cx="11" cy="11" r="8"></circle>
            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
          </svg>
        </div>
        <input
          type="search"
          id="search-modal__input"
          class="search-modal__input"
          placeholder="Search docs"
          aria-label="Search docs"
        />
      </div>

      <button aria-label="Close" class="search-modal__close">
        <!-- https://pictogrammers.com/library/mdi/icon/close/ -->
        <svg
          xmlns="http://www.w3.org/2000/svg"
          aria-hidden="true"
          width="24"
          viewBox="0 0 24 24"
        >
          <path d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z"/>
        </svg>
      </button>
    </div>
    <div
      role="listbox"
      aria-label="Search results"
      id="search-modal__results"
      class="search-modal__results"
    ></div>
    <div class="search-modal__helper-text">
      <div>
        <kbd>↑</kbd> and <kbd>↓</kbd> to navigate •
        <kbd>Enter</kbd> to select •
        <kbd>Esc</kbd> to close
      </div>
      <div>
        Press <kbd>Enter</kbd> without
        selection to search using Google
      </div>
    </div>
  </div>
</div>

</body>
</html>
