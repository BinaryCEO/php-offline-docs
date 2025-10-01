<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: ssh2_connect - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.ssh2-connect.php">
 <link rel="shorturl" href="https://www.php.net/ssh2-connect">
 <link rel="alternate" href="https://www.php.net/ssh2-connect" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.ssh2.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.ssh2-auth-pubkey-file.php">
 <link rel="next" href="https://www.php.net/manual/en/function.ssh2-disconnect.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.ssh2-connect.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.ssh2-connect.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.ssh2-connect.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.ssh2-connect.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.ssh2-connect.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.ssh2-connect.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.ssh2-connect.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.ssh2-connect.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.ssh2-connect.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.ssh2-connect.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.ssh2-connect.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Connect to an SSH server" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: ssh2_connect - Manual" />
<meta name="twitter:description" content="Connect to an SSH server" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: ssh2_connect - Manual" />
<meta itemprop="description" content="Connect to an SSH server" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Connect to an SSH server" />

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
        <a href="function.ssh2-disconnect.php">
          ssh2_disconnect &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.ssh2-auth-pubkey-file.php">
          &laquo; ssh2_auth_pubkey_file        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.other.php'>Other Services</a></li>      <li><a href='book.ssh2.php'>SSH2</a></li>      <li><a href='ref.ssh2.php'>SSH2 Functions</a></li>      </ul>
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
            <option value='en/function.ssh2-connect.php' selected="selected">English</option>
            <option value='de/function.ssh2-connect.php'>German</option>
            <option value='es/function.ssh2-connect.php'>Spanish</option>
            <option value='fr/function.ssh2-connect.php'>French</option>
            <option value='it/function.ssh2-connect.php'>Italian</option>
            <option value='ja/function.ssh2-connect.php'>Japanese</option>
            <option value='pt_BR/function.ssh2-connect.php'>Brazilian Portuguese</option>
            <option value='ru/function.ssh2-connect.php'>Russian</option>
            <option value='tr/function.ssh2-connect.php'>Turkish</option>
            <option value='uk/function.ssh2-connect.php'>Ukrainian</option>
            <option value='zh/function.ssh2-connect.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.ssh2-connect" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">ssh2_connect</h1>
  <p class="verinfo">(PECL ssh2 &gt;= 0.9.0)</p><p class="refpurpose"><span class="refname">ssh2_connect</span> &mdash; <span class="dc-title">Connect to an SSH server</span></p>

 </div>
 
 <div class="refsect1 description" id="refsect1-function.ssh2-connect-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>ssh2_connect</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$host</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$port</code><span class="initializer"> = 22</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$methods</code><span class="initializer"> = ?</span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.array.php" class="type array">array</a></span> <code class="parameter">$callbacks</code><span class="initializer"> = ?</span></span><br>): <span class="type"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Establish a connection to a remote SSH server.
  </p>
  <p class="para">
   Once connected, the client should verify the server&#039;s hostkey using
   <span class="function"><a href="function.ssh2-fingerprint.php" class="function">ssh2_fingerprint()</a></span>, then authenticate using either
   password or public key.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.ssh2-connect-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">host</code></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
    
     <dt><code class="parameter">port</code></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
    
     <dt><code class="parameter">methods</code></dt>
     <dd>
      <p class="para">
       <code class="parameter">methods</code> may be an associative array with up to four parameters
       as described below.
      </p>
      <p class="para">
       <table class="doctable table">
        <caption><strong><code class="parameter">methods</code> may be an associative array
               with any or all of the following parameters.</strong></caption>
        
         <thead>
          <tr>
           <th>Index</th>
           <th>Meaning</th>
           <th>Supported Values*</th>
          </tr>

         </thead>

         <tbody class="tbody">
          <tr>
           <td>kex</td>
           <td>
            List of key exchange methods to advertise, comma separated
            in order of preference.
           </td>
           <td>
            <code class="literal">diffie-hellman-group1-sha1</code>,
            <code class="literal">diffie-hellman-group14-sha1</code>, and
            <code class="literal">diffie-hellman-group-exchange-sha1</code>
           </td>
          </tr>

          <tr>
           <td>hostkey</td>
           <td>
            List of hostkey methods to advertise, comma separated
            in order of preference.
           </td>
           <td>
            <code class="literal">ssh-rsa</code> and
            <code class="literal">ssh-dss</code>
           </td>
          </tr>

          <tr>
           <td>client_to_server</td>
           <td>
            Associative array containing crypt, compression, and
            message authentication code (MAC) method preferences
            for messages sent from client to server.
           </td>
           <td class="empty">&nbsp;</td>
          </tr>

          <tr>
           <td>server_to_client</td>
           <td>
            Associative array containing crypt, compression, and
            message authentication code (MAC) method preferences
            for messages sent from server to client.
           </td>
           <td class="empty">&nbsp;</td>
          </tr>

         </tbody>
        
       </table>

      </p>
      <p class="para">
       * - Supported Values are dependent on methods supported by underlying library.
       See <a href="http://libssh2.org/" class="link external">&raquo;&nbsp;libssh2</a> documentation for additional
       information.
      </p>
      <p class="para">
       <table class="doctable table">
        <caption><strong>
         <code class="parameter">client_to_server</code> and
         <code class="parameter">server_to_client</code> may be an associative array
         with any or all of the following parameters.
        </strong></caption>
        
         <thead>
          <tr>
           <th>Index</th>
           <th>Meaning</th>
           <th>Supported Values*</th>
          </tr>

         </thead>

         <tbody class="tbody">
          <tr>
           <td>crypt</td>
           <td>List of crypto methods to advertise, comma separated
            in order of preference.</td>
           <td>
            <code class="literal">rijndael-cbc@lysator.liu.se</code>,
            <code class="literal">aes256-cbc</code>,
            <code class="literal">aes192-cbc</code>,
            <code class="literal">aes128-cbc</code>,
            <code class="literal">3des-cbc</code>,
            <code class="literal">blowfish-cbc</code>,
            <code class="literal">cast128-cbc</code>,
            <code class="literal">arcfour</code>, and
            <code class="literal">none**</code>
           </td>
          </tr>

          <tr>
           <td>comp</td>
           <td>List of compression methods to advertise, comma separated
            in order of preference.</td>
           <td>
            <code class="literal">zlib</code> and
            <code class="literal">none</code>
           </td>
          </tr>

          <tr>
           <td>mac</td>
           <td>List of MAC methods to advertise, comma separated
            in order of preference.</td>
           <td>
            <code class="literal">hmac-sha1</code>,
            <code class="literal">hmac-sha1-96</code>,
            <code class="literal">hmac-ripemd160</code>,
            <code class="literal">hmac-ripemd160@openssh.com</code>, and
            <code class="literal">none**</code>
           </td>
          </tr>

         </tbody>
        
       </table>

      </p>
      <p class="para">
       <blockquote class="note"><p><strong class="note">Note</strong>: 
        <strong>Crypt and MAC method &quot;<code class="literal">none</code>&quot;</strong><br />
        <p class="para">
         For security reasons, <code class="literal">none</code> is disabled by the underlying
         <a href="http://libssh2.org/" class="link external">&raquo;&nbsp;libssh2</a> library unless explicitly enabled
         during build time by using the appropriate ./configure options.  See documentation
         for the underlying library for more information.
        </p>
       </p></blockquote>
      </p>
     </dd>
    
    
     <dt><code class="parameter">callbacks</code></dt>
     <dd>
      <p class="para">
       <code class="parameter">callbacks</code> may be an associative array with any
       or all of the following parameters.
       <table class="doctable table">
        <caption><strong>
         Callbacks parameters
        </strong></caption>
        
         <thead>
          <tr>
           <th>Index</th>
           <th>Meaning</th>
           <th>Prototype</th>
          </tr>

         </thead>

         <tbody class="tbody">
          <tr>
           <td>ignore</td>
           <td>
            Name of function to call when an
            <strong><code>SSH2_MSG_IGNORE</code></strong> packet is received
           </td>
           <td>void ignore_cb($message)</td>
          </tr>

          <tr>
           <td>debug</td>
           <td>
            Name of function to call when an
            <strong><code>SSH2_MSG_DEBUG</code></strong> packet is received
           </td>
           <td>void debug_cb($message, $language, $always_display)</td>
          </tr>

          <tr>
           <td>macerror</td>
           <td>
            Name of function to call when a packet is received but the
            message authentication code failed.  If the callback returns
            <strong><code><a href="reserved.constants.php#constant.true">true</a></code></strong>, the mismatch will be ignored, otherwise the connection
            will be terminated.
           </td>
           <td>bool macerror_cb($packet)</td>
          </tr>

          <tr>
           <td>disconnect</td>
           <td>
            Name of function to call when an
            <strong><code>SSH2_MSG_DISCONNECT</code></strong> packet is received
           </td>
           <td>void disconnect_cb($reason, $message, $language)</td>
          </tr>

         </tbody>
        
       </table>

      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.ssh2-connect-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns a resource on success, or <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on error.
  </p>
 </div>


 <div class="refsect1 examples" id="refsect1-function.ssh2-connect-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-4817">
    <p><strong>Example #1 <span class="function"><strong>ssh2_connect()</strong></span> example</strong></p>
    <div class="example-contents"><p>
     Open a connection forcing 3des-cbc when sending packets, any strength
     aes cipher when receiving packets, no compression in either direction,
     and Group1 key exchange.
    </p></div>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">/* Notify the user if the server terminates the connection */<br /></span><span style="color: #007700">function </span><span style="color: #0000BB">my_ssh_disconnect</span><span style="color: #007700">(</span><span style="color: #0000BB">$reason</span><span style="color: #007700">, </span><span style="color: #0000BB">$message</span><span style="color: #007700">, </span><span style="color: #0000BB">$language</span><span style="color: #007700">) {<br />  </span><span style="color: #0000BB">printf</span><span style="color: #007700">(</span><span style="color: #DD0000">"Server disconnected with reason code [%d] and message: %s\n"</span><span style="color: #007700">,<br />         </span><span style="color: #0000BB">$reason</span><span style="color: #007700">, </span><span style="color: #0000BB">$message</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #0000BB">$methods </span><span style="color: #007700">= array(<br />  </span><span style="color: #DD0000">'kex' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'diffie-hellman-group1-sha1'</span><span style="color: #007700">,<br />  </span><span style="color: #DD0000">'client_to_server' </span><span style="color: #007700">=&gt; array(<br />    </span><span style="color: #DD0000">'crypt' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'3des-cbc'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'comp' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'none'</span><span style="color: #007700">),<br />  </span><span style="color: #DD0000">'server_to_client' </span><span style="color: #007700">=&gt; array(<br />    </span><span style="color: #DD0000">'crypt' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'aes256-cbc,aes192-cbc,aes128-cbc'</span><span style="color: #007700">,<br />    </span><span style="color: #DD0000">'comp' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'none'</span><span style="color: #007700">));<br /><br /></span><span style="color: #0000BB">$callbacks </span><span style="color: #007700">= array(</span><span style="color: #DD0000">'disconnect' </span><span style="color: #007700">=&gt; </span><span style="color: #DD0000">'my_ssh_disconnect'</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$connection </span><span style="color: #007700">= </span><span style="color: #0000BB">ssh2_connect</span><span style="color: #007700">(</span><span style="color: #DD0000">'shell.example.com'</span><span style="color: #007700">, </span><span style="color: #0000BB">22</span><span style="color: #007700">, </span><span style="color: #0000BB">$methods</span><span style="color: #007700">, </span><span style="color: #0000BB">$callbacks</span><span style="color: #007700">);<br />if (!</span><span style="color: #0000BB">$connection</span><span style="color: #007700">) die(</span><span style="color: #DD0000">'Connection failed'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.ssh2-connect-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.ssh2-fingerprint.php" class="function" rel="rdfs-seeAlso">ssh2_fingerprint()</a> - Retrieve fingerprint of remote server</span></li>
    <li><span class="function"><a href="function.ssh2-auth-none.php" class="function" rel="rdfs-seeAlso">ssh2_auth_none()</a> - Authenticate as &quot;none&quot;</span></li>
    <li><span class="function"><a href="function.ssh2-auth-password.php" class="function" rel="rdfs-seeAlso">ssh2_auth_password()</a> - Authenticate over SSH using a plain password</span></li>
    <li><span class="function"><a href="function.ssh2-auth-pubkey-file.php" class="function" rel="rdfs-seeAlso">ssh2_auth_pubkey_file()</a> - Authenticate using a public key</span></li>
    <li><span class="function"><a href="function.ssh2-disconnect.php" class="function" rel="rdfs-seeAlso">ssh2_disconnect()</a> - Close a connection to a remote SSH server</span></li>
   </ul>
  </p>
 </div>


</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/ssh2/functions/ssh2-connect.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.ssh2-connect%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.ssh2-connect&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ssh2-connect.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="104758">  <div class="votes">
    <div id="Vu104758">
    <a href="/manual/vote-note.php?id=104758&amp;page=function.ssh2-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd104758">
    <a href="/manual/vote-note.php?id=104758&amp;page=function.ssh2-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V104758" title="67% like this...">
    45
    </div>
  </div>
  <a href="#104758" class="name">
  <strong class="user"><em>Steve Kamerman</em></strong></a><a class="genanchor" href="#104758"> &para;</a><div class="date" title="2011-07-05 03:06"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom104758">
<div class="phpcode"><code><span class="html">Due to a lack of complete examples, here's a simple SSH2 class for connecting to a server, authenticating with public key authentication, verifying the server's fingerprint, issuing commands and reading their STDOUT and properly disconnecting.  Note: You may need to make sure you commands produce output so the response can be pulled.  Some people suggest that the command is not executed until you pull the response back.
<br /><span class="default">&lt;?php
<br /></span><span class="keyword">class </span><span class="default">NiceSSH </span><span class="keyword">{
<br />    </span><span class="comment">// SSH Host
<br />    </span><span class="keyword">private </span><span class="default">$ssh_host </span><span class="keyword">= </span><span class="string">'myserver.example.com'</span><span class="keyword">;
<br />    </span><span class="comment">// SSH Port
<br />    </span><span class="keyword">private </span><span class="default">$ssh_port </span><span class="keyword">= </span><span class="default">22</span><span class="keyword">;
<br />    </span><span class="comment">// SSH Server Fingerprint
<br />    </span><span class="keyword">private </span><span class="default">$ssh_server_fp </span><span class="keyword">= </span><span class="string">'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'</span><span class="keyword">;
<br />    </span><span class="comment">// SSH Username
<br />    </span><span class="keyword">private </span><span class="default">$ssh_auth_user </span><span class="keyword">= </span><span class="string">'username'</span><span class="keyword">;
<br />    </span><span class="comment">// SSH Public Key File
<br />    </span><span class="keyword">private </span><span class="default">$ssh_auth_pub </span><span class="keyword">= </span><span class="string">'/home/username/.ssh/id_rsa.pub'</span><span class="keyword">;
<br />    </span><span class="comment">// SSH Private Key File
<br />    </span><span class="keyword">private </span><span class="default">$ssh_auth_priv </span><span class="keyword">= </span><span class="string">'/home/username/.ssh/id_rsa'</span><span class="keyword">;
<br />    </span><span class="comment">// SSH Private Key Passphrase (null == no passphrase)
<br />    </span><span class="keyword">private </span><span class="default">$ssh_auth_pass</span><span class="keyword">;
<br />    </span><span class="comment">// SSH Connection
<br />    </span><span class="keyword">private </span><span class="default">$connection</span><span class="keyword">;
<br />    
<br />    public function </span><span class="default">connect</span><span class="keyword">() {
<br />        if (!(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">connection </span><span class="keyword">= </span><span class="default">ssh2_connect</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">ssh_host</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">ssh_port</span><span class="keyword">))) {
<br />            throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">'Cannot connect to server'</span><span class="keyword">);
<br />        }
<br />        </span><span class="default">$fingerprint </span><span class="keyword">= </span><span class="default">ssh2_fingerprint</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">connection</span><span class="keyword">, </span><span class="default">SSH2_FINGERPRINT_MD5 </span><span class="keyword">| </span><span class="default">SSH2_FINGERPRINT_HEX</span><span class="keyword">);
<br />        if (</span><span class="default">strcmp</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">ssh_server_fp</span><span class="keyword">, </span><span class="default">$fingerprint</span><span class="keyword">) !== </span><span class="default">0</span><span class="keyword">) {
<br />            throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">'Unable to verify server identity!'</span><span class="keyword">);
<br />        }
<br />        if (!</span><span class="default">ssh2_auth_pubkey_file</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">connection</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">ssh_auth_user</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">ssh_auth_pub</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">ssh_auth_priv</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">ssh_auth_pass</span><span class="keyword">)) {
<br />            throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">'Autentication rejected by server'</span><span class="keyword">);
<br />        }
<br />    }
<br />    public function </span><span class="default">exec</span><span class="keyword">(</span><span class="default">$cmd</span><span class="keyword">) {
<br />        if (!(</span><span class="default">$stream </span><span class="keyword">= </span><span class="default">ssh2_exec</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">connection</span><span class="keyword">, </span><span class="default">$cmd</span><span class="keyword">))) {
<br />            throw new </span><span class="default">Exception</span><span class="keyword">(</span><span class="string">'SSH command failed'</span><span class="keyword">);
<br />        }
<br />        </span><span class="default">stream_set_blocking</span><span class="keyword">(</span><span class="default">$stream</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);
<br />        </span><span class="default">$data </span><span class="keyword">= </span><span class="string">""</span><span class="keyword">;
<br />        while (</span><span class="default">$buf </span><span class="keyword">= </span><span class="default">fread</span><span class="keyword">(</span><span class="default">$stream</span><span class="keyword">, </span><span class="default">4096</span><span class="keyword">)) {
<br />            </span><span class="default">$data </span><span class="keyword">.= </span><span class="default">$buf</span><span class="keyword">;
<br />        }
<br />        </span><span class="default">fclose</span><span class="keyword">(</span><span class="default">$stream</span><span class="keyword">);
<br />        return </span><span class="default">$data</span><span class="keyword">;
<br />    }
<br />    public function </span><span class="default">disconnect</span><span class="keyword">() {
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">exec</span><span class="keyword">(</span><span class="string">'echo "EXITING" &amp;&amp; exit;'</span><span class="keyword">);
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">connection </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;
<br />    }
<br />    public function </span><span class="default">__destruct</span><span class="keyword">() {
<br />        </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">disconnect</span><span class="keyword">();
<br />    }
<br />}
<br /></span><span class="default">?&gt;
<br /></span>
<br />[EDIT BY danbrown AT php DOT net: Contains two bugfixes suggested by 'AlainC' in user note #109185 (removed) on 26-JUN-2012.]</span></code></div>
  </div>
 </div>
  <div class="note" id="116649">  <div class="votes">
    <div id="Vu116649">
    <a href="/manual/vote-note.php?id=116649&amp;page=function.ssh2-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116649">
    <a href="/manual/vote-note.php?id=116649&amp;page=function.ssh2-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116649" title="72% like this...">
    16
    </div>
  </div>
  <a href="#116649" class="name">
  <strong class="user"><em>thessoro at gmail dot com</em></strong></a><a class="genanchor" href="#116649"> &para;</a><div class="date" title="2015-02-04 07:38"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116649">
<div class="phpcode"><code><span class="html">Be careful when providing a specific hostkey order. <br /><br /><span class="default">&lt;?php<br />ssh2_connect</span><span class="keyword">(</span><span class="string">'IP'</span><span class="keyword">, </span><span class="string">'port'</span><span class="keyword">, array(</span><span class="string">'hostkey'</span><span class="keyword">=&gt;</span><span class="string">'ssh-rsa, ssh-dss'</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />Will only work when the public key of the server is RSA, and not DSA also as expected. This is caused by the empty space before the "ssh-dss". <br /><br />So a similar code:<br /><br /><span class="default">&lt;?php<br />ssh2_connect</span><span class="keyword">(</span><span class="string">'IP'</span><span class="keyword">, </span><span class="string">'port'</span><span class="keyword">,   array(</span><span class="string">'hostkey'</span><span class="keyword">=&gt;</span><span class="string">'ssh-rsa,ssh-dss'</span><span class="keyword">));<br /></span><span class="default">?&gt;<br /></span><br />Will work. The HOSTKEY method is overriden using exactly what you write, so no empty spaces are allowed.<br /><br />This took me some time that you could save ;)</span></code></div>
  </div>
 </div>
  <div class="note" id="121969">  <div class="votes">
    <div id="Vu121969">
    <a href="/manual/vote-note.php?id=121969&amp;page=function.ssh2-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd121969">
    <a href="/manual/vote-note.php?id=121969&amp;page=function.ssh2-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V121969" title="61% like this...">
    11
    </div>
  </div>
  <a href="#121969" class="name">
  <strong class="user"><em>christophermjgray at gmail dot com</em></strong></a><a class="genanchor" href="#121969"> &para;</a><div class="date" title="2017-12-02 10:01"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom121969">
<div class="phpcode"><code><span class="html">This page is out of date.  Any of the SHA-1 in the Key Exchange Methods in the kex section should be discarded, due to Logjam (<a href="https://weakdh.org/logjam.html" rel="nofollow" target="_blank">https://weakdh.org/logjam.html</a>).  If you continue to use them, connects will result in the following warning: <br />"Warning: ssh2_connect(): Error starting up SSH connection(-5): Unable to exchange encryption keys in ..."<br /><br />The following is an example of what works.  Also by removing the 'hex' section all together, results in libssl (<a href="https://libssh2.org/" rel="nofollow" target="_blank">https://libssh2.org/</a>) falling back to discovering which is the strongest cipher to authenticate with. <br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">if (!</span><span class="default">function_exists</span><span class="keyword">(</span><span class="string">"ssh2_connect"</span><span class="keyword">)) die(</span><span class="string">"function ssh2_connect doesn't exist"</span><span class="keyword">);<br /><br />function </span><span class="default">ssh2_debug</span><span class="keyword">(</span><span class="default">$message</span><span class="keyword">, </span><span class="default">$language</span><span class="keyword">, </span><span class="default">$always_display</span><span class="keyword">) {<br />   </span><span class="default">printf</span><span class="keyword">(</span><span class="string">"%s %s %s\n"</span><span class="keyword">,</span><span class="default">$message</span><span class="keyword">,</span><span class="default">$language</span><span class="keyword">,</span><span class="default">$always_display</span><span class="keyword">);<br />}<br /><br /></span><span class="comment">/* Notify the user if the server terminates the connection */<br /></span><span class="keyword">function </span><span class="default">my_ssh_disconnect</span><span class="keyword">(</span><span class="default">$reason</span><span class="keyword">, </span><span class="default">$message</span><span class="keyword">, </span><span class="default">$language</span><span class="keyword">) {<br />  </span><span class="default">printf</span><span class="keyword">(</span><span class="string">"Server disconnected with reason code [%d] and message: %s\n"</span><span class="keyword">, </span><span class="default">$reason</span><span class="keyword">, </span><span class="default">$message</span><span class="keyword">);<br />}<br /><br /></span><span class="default">$methods </span><span class="keyword">= array(<br />    </span><span class="string">'hostkey'</span><span class="keyword">=&gt;</span><span class="string">'ssh-rsa,ssh-dss'</span><span class="keyword">,<br /></span><span class="comment">//    'kex' =&gt; 'diffie-hellman-group-exchange-sha256',<br />    </span><span class="string">'client_to_server' </span><span class="keyword">=&gt; array(<br />        </span><span class="string">'crypt' </span><span class="keyword">=&gt; </span><span class="string">'aes256-ctr,aes192-ctr,aes128-ctr,aes256-cbc,aes192-cbc,aes128-cbc,3des-cbc,blowfish-cbc'</span><span class="keyword">,<br />        </span><span class="string">'comp' </span><span class="keyword">=&gt; </span><span class="string">'none'</span><span class="keyword">),<br />    </span><span class="string">'server_to_client' </span><span class="keyword">=&gt; array(<br />        </span><span class="string">'crypt' </span><span class="keyword">=&gt; </span><span class="string">'aes256-ctr,aes192-ctr,aes128-ctr,aes256-cbc,aes192-cbc,aes128-cbc,3des-cbc,blowfish-cbc'</span><span class="keyword">,<br />        </span><span class="string">'comp' </span><span class="keyword">=&gt; </span><span class="string">'none'</span><span class="keyword">));<br />        <br /></span><span class="default">$callbacks </span><span class="keyword">= array(</span><span class="string">'disconnect' </span><span class="keyword">=&gt; </span><span class="string">'my_ssh_disconnect'</span><span class="keyword">);<br /><br />foreach (array(</span><span class="string">'192.168.1.1'</span><span class="keyword">) as </span><span class="default">$host</span><span class="keyword">) {<br />  </span><span class="default">$connection </span><span class="keyword">= </span><span class="default">ssh2_connect</span><span class="keyword">(</span><span class="default">$host</span><span class="keyword">, </span><span class="default">22</span><span class="keyword">, </span><span class="default">$methods</span><span class="keyword">, </span><span class="default">$callbacks</span><span class="keyword">);<br />  if (!</span><span class="default">$connection</span><span class="keyword">) die(</span><span class="string">"Connection failed:"</span><span class="keyword">);<br /><br />  </span><span class="default">ssh2_auth_password</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">, </span><span class="string">'user'</span><span class="keyword">, </span><span class="string">'my_password'</span><span class="keyword">) or die(</span><span class="string">"Unable to authenticate"</span><span class="keyword">);<br />  </span><span class="default">$stream </span><span class="keyword">= </span><span class="default">ssh2_exec</span><span class="keyword">(</span><span class="default">$connection</span><span class="keyword">, </span><span class="string">'free -m'</span><span class="keyword">);<br />  </span><span class="default">stream_set_blocking</span><span class="keyword">(</span><span class="default">$stream</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br />  </span><span class="default">$stream_out </span><span class="keyword">= </span><span class="default">ssh2_fetch_stream</span><span class="keyword">(</span><span class="default">$stream</span><span class="keyword">, </span><span class="default">SSH2_STREAM_STDIO</span><span class="keyword">);<br />  echo </span><span class="default">stream_get_contents</span><span class="keyword">(</span><span class="default">$stream_out</span><span class="keyword">);<br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="124713">  <div class="votes">
    <div id="Vu124713">
    <a href="/manual/vote-note.php?id=124713&amp;page=function.ssh2-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd124713">
    <a href="/manual/vote-note.php?id=124713&amp;page=function.ssh2-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V124713" title="66% like this...">
    3
    </div>
  </div>
  <a href="#124713" class="name">
  <strong class="user"><em>jrdbrndt at gmail dot com</em></strong></a><a class="genanchor" href="#124713"> &para;</a><div class="date" title="2020-02-13 03:40"><strong>5 years ago</strong></div>
  <div class="text" id="Hcom124713">
<div class="phpcode"><code><span class="html">Trying to include "aes256-cbc" in the encryption methods list caused an error. The documentation here may be out of date, and you might find a more accurate list of what values are acceptable by checking the libssh2 documentation at libssh2.org.</span></code></div>
  </div>
 </div>
  <div class="note" id="128835">  <div class="votes">
    <div id="Vu128835">
    <a href="/manual/vote-note.php?id=128835&amp;page=function.ssh2-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128835">
    <a href="/manual/vote-note.php?id=128835&amp;page=function.ssh2-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128835" title="60% like this...">
    1
    </div>
  </div>
  <a href="#128835" class="name">
  <strong class="user"><em>devoldemar</em></strong></a><a class="genanchor" href="#128835"> &para;</a><div class="date" title="2023-08-28 11:50"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128835">
<div class="phpcode"><code><span class="html">Usage of 'hostkey' option makes sence when you need to check authenticity of the remote server, e.g. by means of ssh2_fingerprint function. For that purpose you specify a list of possible algorithms sorted by priority in descending order. Supported values also include 'ssh-ed25519', 'ecdsa-sha2-nistp256', 'ecdsa-sha2-nistp384' and 'ecdsa-sha2-nistp521'.<br />For instance:<br /><span class="default">&lt;?php<br />$ssh </span><span class="keyword">= </span><span class="default">ssh2_connect</span><span class="keyword">(</span><span class="string">'192.168.3.1'</span><span class="keyword">, </span><span class="default">22</span><span class="keyword">, [</span><span class="string">'hostkey' </span><span class="keyword">=&gt; </span><span class="string">'ssh-ed25519,ssh-rsa'</span><span class="keyword">]);<br /></span><span class="default">$md5 </span><span class="keyword">= </span><span class="default">ssh2_fingerprint</span><span class="keyword">(</span><span class="default">$ssh</span><span class="keyword">); </span><span class="comment">// returns MD5 hash of ED25519 host key, or MD5 hash of RSA key if the key of previous type is absent<br /></span><span class="default">?&gt;<br /></span><br />Note, if the remote server does not have a key of appropriate type connection will fail:<br /><span class="default">&lt;?php<br />$ssh </span><span class="keyword">= </span><span class="default">ssh2_connect</span><span class="keyword">(</span><span class="string">'192.168.3.1'</span><span class="keyword">, </span><span class="default">22</span><span class="keyword">, [</span><span class="string">'hostkey' </span><span class="keyword">=&gt; </span><span class="string">'ssh-dss'</span><span class="keyword">]);<br /></span><span class="default">PHP Warning</span><span class="keyword">:  </span><span class="default">ssh2_connect</span><span class="keyword">(): </span><span class="default">Error starting up SSH connection</span><span class="keyword">(-</span><span class="default">5</span><span class="keyword">): </span><span class="default">Unable to exchange encryption keys in php shell code on line 1<br />PHP Warning</span><span class="keyword">:  </span><span class="default">ssh2_connect</span><span class="keyword">(): </span><span class="default">Unable to connect to 192.168.3.1 in php shell code on line 1<br />?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="112820">  <div class="votes">
    <div id="Vu112820">
    <a href="/manual/vote-note.php?id=112820&amp;page=function.ssh2-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd112820">
    <a href="/manual/vote-note.php?id=112820&amp;page=function.ssh2-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V112820" title="52% like this...">
    1
    </div>
  </div>
  <a href="#112820" class="name">
  <strong class="user"><em>Trev White</em></strong></a><a class="genanchor" href="#112820"> &para;</a><div class="date" title="2013-07-26 09:20"><strong>12 years ago</strong></div>
  <div class="text" id="Hcom112820">
<div class="phpcode"><code><span class="html">Hi,<br />If you are having problems with running a ssh2 session and it waits forever during the execution of stream_get_contents, it might be because the remote system has run the command and is now sitting at a # prompt waiting for the next command.  I had this issue on a HP MSA box, here is the code to get around the issue.<br /><br />Assuming you are connected with your authentication method and $ssh contains the handle.<br /><br /><span class="default">&lt;?php<br />$command </span><span class="keyword">= </span><span class="string">"check disk"</span><span class="keyword">;<br /></span><span class="comment">// Open a nice large window to stop wrapping<br /></span><span class="default">$stream </span><span class="keyword">= </span><span class="default">ssh2_shell </span><span class="keyword">(</span><span class="default">$ssh</span><span class="keyword">, </span><span class="string">'xterm'</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">, </span><span class="default">200</span><span class="keyword">, </span><span class="default">200</span><span class="keyword">, </span><span class="default">SSH2_TERM_UNIT_CHARS</span><span class="keyword">); <br /><br /></span><span class="comment">// Hook into the error stream<br /></span><span class="default">$errorStream </span><span class="keyword">= </span><span class="default">ssh2_fetch_stream</span><span class="keyword">(</span><span class="default">$stream</span><span class="keyword">, </span><span class="default">SSH2_STREAM_STDERR</span><span class="keyword">);  <br /><br /></span><span class="comment">// Block the streams so we wait until they complete<br /></span><span class="default">stream_set_blocking </span><span class="keyword">(</span><span class="default">$stream</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /></span><span class="default">stream_set_blocking</span><span class="keyword">(</span><span class="default">$errorStream</span><span class="keyword">, </span><span class="default">true</span><span class="keyword">);<br /><br /></span><span class="comment">// Send the commands to the terminal<br /></span><span class="default">fwrite </span><span class="keyword">(</span><span class="default">$stream</span><span class="keyword">, </span><span class="default">$command </span><span class="keyword">. </span><span class="default">PHP_EOL </span><span class="keyword">);<br /><br /></span><span class="comment">// Wait give the terminal a chance to accept and start processing the command, this is a slow storage device after all<br /></span><span class="default">sleep</span><span class="keyword">(</span><span class="default">2</span><span class="keyword">);<br /><br /></span><span class="comment">// IMPORTANT BIT!!  Send exit to the terminal to close the connection BEFORE WE WAIT FOR THE STREAM<br /></span><span class="default">fwrite </span><span class="keyword">(</span><span class="default">$stream</span><span class="keyword">, </span><span class="string">"exit" </span><span class="keyword">. </span><span class="default">PHP_EOL </span><span class="keyword">);<br /></span><span class="default">sleep </span><span class="keyword">(</span><span class="default">2</span><span class="keyword">);<br /><br /></span><span class="comment">// Print the output<br /></span><span class="keyword">echo </span><span class="default">stream_get_contents</span><span class="keyword">(</span><span class="default">$stream</span><span class="keyword">);<br /></span><span class="default">$errortext</span><span class="keyword">=</span><span class="default">stream_get_contents</span><span class="keyword">(</span><span class="default">$errorStream</span><span class="keyword">);<br /><br />if (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$errortext</span><span class="keyword">) &gt; </span><span class="default">0</span><span class="keyword">) {<br />          </span><span class="comment">// Error Data<br />         </span><span class="keyword">echo </span><span class="string">"Error Data: </span><span class="default">$errortext</span><span class="string">"</span><span class="keyword">;<br />         exit (</span><span class="default">1</span><span class="keyword">);<br />}<br /><br /></span><span class="comment">// All Good<br /></span><span class="keyword">exit (</span><span class="default">0</span><span class="keyword">);<br /><br /></span><span class="default">?&gt;<br /></span><br />You can't use ssh2_exec with this method (well at lease I couldn't) because on executing the first command the stream gets blocked and then you can't run the exit command, whereas a terminal seems to use one session.<br /><br />I hope this helps someone.</span></code></div>
  </div>
 </div>
  <div class="note" id="50311">  <div class="votes">
    <div id="Vu50311">
    <a href="/manual/vote-note.php?id=50311&amp;page=function.ssh2-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd50311">
    <a href="/manual/vote-note.php?id=50311&amp;page=function.ssh2-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V50311" title="52% like this...">
    1
    </div>
  </div>
  <a href="#50311" class="name">
  <strong class="user"><em>suri dot suribala dot com</em></strong></a><a class="genanchor" href="#50311"> &para;</a><div class="date" title="2005-02-24 05:00"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom50311">
<div class="phpcode"><code><span class="html">With Sara's help, I have the following SS2 class that is quite flexible. If anyone improves it, please feel free to let me know.<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="comment">// ssh protocols<br />// note: once openShell method is used, cmdExec does not work<br /><br /></span><span class="keyword">class </span><span class="default">ssh2 </span><span class="keyword">{<br /><br />  private </span><span class="default">$host </span><span class="keyword">= </span><span class="string">'host'</span><span class="keyword">;<br />  private </span><span class="default">$user </span><span class="keyword">= </span><span class="string">'user'</span><span class="keyword">;<br />  private </span><span class="default">$port </span><span class="keyword">= </span><span class="string">'22'</span><span class="keyword">;<br />  private </span><span class="default">$password </span><span class="keyword">= </span><span class="string">'password'</span><span class="keyword">;<br />  private </span><span class="default">$con </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />  private </span><span class="default">$shell_type </span><span class="keyword">= </span><span class="string">'xterm'</span><span class="keyword">;<br />  private </span><span class="default">$shell </span><span class="keyword">= </span><span class="default">null</span><span class="keyword">;<br />  private </span><span class="default">$log </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br /><br />  function </span><span class="default">__construct</span><span class="keyword">(</span><span class="default">$host</span><span class="keyword">=</span><span class="string">''</span><span class="keyword">, </span><span class="default">$port</span><span class="keyword">=</span><span class="string">''  </span><span class="keyword">) {<br /><br />     if( </span><span class="default">$host</span><span class="keyword">!=</span><span class="string">'' </span><span class="keyword">) </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">host  </span><span class="keyword">= </span><span class="default">$host</span><span class="keyword">;<br />     if( </span><span class="default">$port</span><span class="keyword">!=</span><span class="string">'' </span><span class="keyword">) </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">port  </span><span class="keyword">= </span><span class="default">$port</span><span class="keyword">;<br /><br />     </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">con  </span><span class="keyword">= </span><span class="default">ssh2_connect</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">host</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">port</span><span class="keyword">);<br />     if( !</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">con </span><span class="keyword">) {<br />       </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">log </span><span class="keyword">.= </span><span class="string">"Connection failed !"</span><span class="keyword">; <br />     }<br /><br />  }<br /><br />  function </span><span class="default">authPassword</span><span class="keyword">( </span><span class="default">$user </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">, </span><span class="default">$password </span><span class="keyword">= </span><span class="string">'' </span><span class="keyword">) {<br /><br />     if( </span><span class="default">$user</span><span class="keyword">!=</span><span class="string">'' </span><span class="keyword">) </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">user  </span><span class="keyword">= </span><span class="default">$user</span><span class="keyword">;<br />     if( </span><span class="default">$password</span><span class="keyword">!=</span><span class="string">'' </span><span class="keyword">) </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">password  </span><span class="keyword">= </span><span class="default">$password</span><span class="keyword">;<br /><br />     if( !</span><span class="default">ssh2_auth_password</span><span class="keyword">( </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">con</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">user</span><span class="keyword">, </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">password </span><span class="keyword">) ) {<br />       </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">log </span><span class="keyword">.= </span><span class="string">"Authorization failed !"</span><span class="keyword">; <br />     }<br /><br />  }<br /><br />  function </span><span class="default">openShell</span><span class="keyword">( </span><span class="default">$shell_type </span><span class="keyword">= </span><span class="string">'' </span><span class="keyword">) {<br /><br />        if ( </span><span class="default">$shell_type </span><span class="keyword">!= </span><span class="string">'' </span><span class="keyword">) </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">shell_type </span><span class="keyword">= </span><span class="default">$shell_type</span><span class="keyword">;<br />    </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">shell </span><span class="keyword">= </span><span class="default">ssh2_shell</span><span class="keyword">( </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">con</span><span class="keyword">,  </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">shell_type </span><span class="keyword">);<br />    if( !</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">shell </span><span class="keyword">) </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">log </span><span class="keyword">.= </span><span class="string">" Shell connection failed !"</span><span class="keyword">;<br /><br />  }<br /><br />  function </span><span class="default">writeShell</span><span class="keyword">( </span><span class="default">$command </span><span class="keyword">= </span><span class="string">'' </span><span class="keyword">) {<br /><br />    </span><span class="default">fwrite</span><span class="keyword">(</span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">shell</span><span class="keyword">, </span><span class="default">$command</span><span class="keyword">.</span><span class="string">"\n"</span><span class="keyword">);<br /><br />  }<br /><br />  function </span><span class="default">cmdExec</span><span class="keyword">( ) {<br /><br />        </span><span class="default">$argc </span><span class="keyword">= </span><span class="default">func_num_args</span><span class="keyword">();<br />        </span><span class="default">$argv </span><span class="keyword">= </span><span class="default">func_get_args</span><span class="keyword">();<br /><br />    </span><span class="default">$cmd </span><span class="keyword">= </span><span class="string">''</span><span class="keyword">;<br />    for( </span><span class="default">$i</span><span class="keyword">=</span><span class="default">0</span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">&lt;</span><span class="default">$argc </span><span class="keyword">; </span><span class="default">$i</span><span class="keyword">++) {<br />        if( </span><span class="default">$i </span><span class="keyword">!= (</span><span class="default">$argc</span><span class="keyword">-</span><span class="default">1</span><span class="keyword">) ) {<br />          </span><span class="default">$cmd </span><span class="keyword">.= </span><span class="default">$argv</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">].</span><span class="string">" &amp;&amp; "</span><span class="keyword">;<br />        }else{<br />          </span><span class="default">$cmd </span><span class="keyword">.= </span><span class="default">$argv</span><span class="keyword">[</span><span class="default">$i</span><span class="keyword">];<br />        }<br />    }<br />    echo </span><span class="default">$cmd</span><span class="keyword">;<br /><br />        </span><span class="default">$stream </span><span class="keyword">= </span><span class="default">ssh2_exec</span><span class="keyword">( </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">con</span><span class="keyword">, </span><span class="default">$cmd </span><span class="keyword">);<br />    </span><span class="default">stream_set_blocking</span><span class="keyword">( </span><span class="default">$stream</span><span class="keyword">, </span><span class="default">true </span><span class="keyword">);<br />    return </span><span class="default">fread</span><span class="keyword">( </span><span class="default">$stream</span><span class="keyword">, </span><span class="default">4096 </span><span class="keyword">);<br /><br />  }<br /><br />  function </span><span class="default">getLog</span><span class="keyword">() {<br /><br />     return </span><span class="default">$this</span><span class="keyword">-&gt;</span><span class="default">log</span><span class="keyword">; <br /><br />  }<br /><br />}<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="115172">  <div class="votes">
    <div id="Vu115172">
    <a href="/manual/vote-note.php?id=115172&amp;page=function.ssh2-connect&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd115172">
    <a href="/manual/vote-note.php?id=115172&amp;page=function.ssh2-connect&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V115172" title="45% like this...">
    -1
    </div>
  </div>
  <a href="#115172" class="name">
  <strong class="user"><em>rainerkrauss at googlemail dot com</em></strong></a><a class="genanchor" href="#115172"> &para;</a><div class="date" title="2014-06-08 11:00"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom115172">
<div class="phpcode"><code><span class="html">Warning! If you open a ssh connection and execute an external program opening another ssh connection it may result in very strange behavior.<br /><br />I used an sftp connection to get a file list and used "exec" to download the files afterwards with an external sftp. lftp downloaded zeros with no comment, psftp exits with error code 11 most of the time, but sometimes it works - probably depending on how quickly php collects garbage and closes the unused connection first.<br /><br />As there is no function to close a connection, you need to be sure to destroy all references (unset) to close it.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.ssh2-connect&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.ssh2-connect.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.ssh2.php">SSH2 Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.ssh2-auth-agent.php" title="ssh2_&#8203;auth_&#8203;agent">ssh2_&#8203;auth_&#8203;agent</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-auth-hostbased-file.php" title="ssh2_&#8203;auth_&#8203;hostbased_&#8203;file">ssh2_&#8203;auth_&#8203;hostbased_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-auth-none.php" title="ssh2_&#8203;auth_&#8203;none">ssh2_&#8203;auth_&#8203;none</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-auth-password.php" title="ssh2_&#8203;auth_&#8203;password">ssh2_&#8203;auth_&#8203;password</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-auth-pubkey-file.php" title="ssh2_&#8203;auth_&#8203;pubkey_&#8203;file">ssh2_&#8203;auth_&#8203;pubkey_&#8203;file</a>
                        </li>
                                                <li class="current">
                            <a href="function.ssh2-connect.php" title="ssh2_&#8203;connect">ssh2_&#8203;connect</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-disconnect.php" title="ssh2_&#8203;disconnect">ssh2_&#8203;disconnect</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-exec.php" title="ssh2_&#8203;exec">ssh2_&#8203;exec</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-fetch-stream.php" title="ssh2_&#8203;fetch_&#8203;stream">ssh2_&#8203;fetch_&#8203;stream</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-fingerprint.php" title="ssh2_&#8203;fingerprint">ssh2_&#8203;fingerprint</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-forward-accept.php" title="ssh2_&#8203;forward_&#8203;accept">ssh2_&#8203;forward_&#8203;accept</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-forward-listen.php" title="ssh2_&#8203;forward_&#8203;listen">ssh2_&#8203;forward_&#8203;listen</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-methods-negotiated.php" title="ssh2_&#8203;methods_&#8203;negotiated">ssh2_&#8203;methods_&#8203;negotiated</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-poll.php" title="ssh2_&#8203;poll">ssh2_&#8203;poll</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-publickey-add.php" title="ssh2_&#8203;publickey_&#8203;add">ssh2_&#8203;publickey_&#8203;add</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-publickey-init.php" title="ssh2_&#8203;publickey_&#8203;init">ssh2_&#8203;publickey_&#8203;init</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-publickey-list.php" title="ssh2_&#8203;publickey_&#8203;list">ssh2_&#8203;publickey_&#8203;list</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-publickey-remove.php" title="ssh2_&#8203;publickey_&#8203;remove">ssh2_&#8203;publickey_&#8203;remove</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-scp-recv.php" title="ssh2_&#8203;scp_&#8203;recv">ssh2_&#8203;scp_&#8203;recv</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-scp-send.php" title="ssh2_&#8203;scp_&#8203;send">ssh2_&#8203;scp_&#8203;send</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-send-eof.php" title="ssh2_&#8203;send_&#8203;eof">ssh2_&#8203;send_&#8203;eof</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-sftp.php" title="ssh2_&#8203;sftp">ssh2_&#8203;sftp</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-sftp-chmod.php" title="ssh2_&#8203;sftp_&#8203;chmod">ssh2_&#8203;sftp_&#8203;chmod</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-sftp-lstat.php" title="ssh2_&#8203;sftp_&#8203;lstat">ssh2_&#8203;sftp_&#8203;lstat</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-sftp-mkdir.php" title="ssh2_&#8203;sftp_&#8203;mkdir">ssh2_&#8203;sftp_&#8203;mkdir</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-sftp-readlink.php" title="ssh2_&#8203;sftp_&#8203;readlink">ssh2_&#8203;sftp_&#8203;readlink</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-sftp-realpath.php" title="ssh2_&#8203;sftp_&#8203;realpath">ssh2_&#8203;sftp_&#8203;realpath</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-sftp-rename.php" title="ssh2_&#8203;sftp_&#8203;rename">ssh2_&#8203;sftp_&#8203;rename</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-sftp-rmdir.php" title="ssh2_&#8203;sftp_&#8203;rmdir">ssh2_&#8203;sftp_&#8203;rmdir</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-sftp-stat.php" title="ssh2_&#8203;sftp_&#8203;stat">ssh2_&#8203;sftp_&#8203;stat</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-sftp-symlink.php" title="ssh2_&#8203;sftp_&#8203;symlink">ssh2_&#8203;sftp_&#8203;symlink</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-sftp-unlink.php" title="ssh2_&#8203;sftp_&#8203;unlink">ssh2_&#8203;sftp_&#8203;unlink</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-shell.php" title="ssh2_&#8203;shell">ssh2_&#8203;shell</a>
                        </li>
                                                <li class="">
                            <a href="function.ssh2-tunnel.php" title="ssh2_&#8203;tunnel">ssh2_&#8203;tunnel</a>
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
