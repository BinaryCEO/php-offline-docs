<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Session Management Basics - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/features.session.security.management.php">
 <link rel="shorturl" href="https://www.php.net/session.security.management">
 <link rel="alternate" href="https://www.php.net/session.security.management" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/session.security.php">
 <link rel="prev" href="https://www.php.net/manual/en/session.security.php">
 <link rel="next" href="https://www.php.net/manual/en/session.security.ini.php">

 <link rel="alternate" href="https://www.php.net/manual/en/features.session.security.management.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/features.session.security.management.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/features.session.security.management.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/features.session.security.management.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/features.session.security.management.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/features.session.security.management.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/features.session.security.management.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/features.session.security.management.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/features.session.security.management.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/features.session.security.management.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/features.session.security.management.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Session Management Basics" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Session Management Basics - Manual" />
<meta name="twitter:description" content="Session Management Basics" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Session Management Basics - Manual" />
<meta itemprop="description" content="Session Management Basics" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Session Management Basics" />

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
        <a href="session.security.ini.php">
          Securing Session INI Settings &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="session.security.php">
          &laquo; Sessions and Security        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.session.php'>Session Extensions</a></li>      <li><a href='book.session.php'>Sessions</a></li>      <li><a href='session.security.php'>Sessions and Security</a></li>      </ul>
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
            <option value='en/features.session.security.management.php' selected="selected">English</option>
            <option value='de/features.session.security.management.php'>German</option>
            <option value='es/features.session.security.management.php'>Spanish</option>
            <option value='fr/features.session.security.management.php'>French</option>
            <option value='it/features.session.security.management.php'>Italian</option>
            <option value='ja/features.session.security.management.php'>Japanese</option>
            <option value='pt_BR/features.session.security.management.php'>Brazilian Portuguese</option>
            <option value='ru/features.session.security.management.php'>Russian</option>
            <option value='tr/features.session.security.management.php'>Turkish</option>
            <option value='uk/features.session.security.management.php'>Ukrainian</option>
            <option value='zh/features.session.security.management.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="features.session.security.management" class="sect1">
   <h2 class="title">Session Management Basics</h2>

   <div class="sect2" id="features.session.security.management.basic">
    <h3 class="title">Session Security</h3>

    <p class="para">
     The session module can not guarantee that the information stored
     in a session is only viewed by the user who created the session.
     Additional measures are needed to protect the confidentiality
     of the session, depending on the value associated with it.
    </p>

    <p class="para">
     The importance of the data carried in the session needs to be
     assessed and further protection may be deployed; this typically
     comes at a price, such as reduced convenience for the user.
     For example, to protect users from a simple social engineering tactic,
     <a href="session.configuration.php#ini.session.use-only-cookies" class="link">session.use_only_cookies</a>
     needs to be enabled. In that case, cookies must be enabled
     unconditionally on the client side, or sessions will not work.
    </p>

    <p class="para">
     There are several ways to leak an existing session ID to third
     parties. E.g. JavaScript injections, session IDs in URLs,
     packet sniffing, physical access to the device, etc.
     A leaked session ID enables the third party to access all
     resources associated with a specific ID. First, URLs carrying
     session IDs. If there are links to an external site or resource,
     the URL including the session ID might be stored in the external
     site&#039;s referrer logs. Second, a more active attacker might listen
     to network traffic. If it is unencrypted, session IDs will flow
     in plain text over the network. The solution is to implement
     SSL/TLS on the server and make it mandatory for users.
     HSTS should be used for improved security.
   </p>

   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <span class="simpara">
     Even HTTPS can not protect confidential data at all times.
     For example the CRIME and Beast vulnerabilities may enable an
     attacker to read the data. Also, note that many networks employ
     HTTPS MITM proxies for audit purposes.
     Attackers may also set up such a proxy.
    </span>
   </p></blockquote>

  </div>

  <div class="sect2" id="features.session.security.management.non-adaptive-session">
   <h3 class="title">Non-adaptive Session Management</h3>

   <p class="para">
    PHP&#039;s session manager is adaptive by default currently.
    An adaptive session manager bears additional risks.
   </p>

   <p class="para">
    When <a href="session.configuration.php#ini.session.use-strict-mode" class="link">session.use_strict_mode</a> is enabled, 
    and the session save handler supports it,
    an uninitialized session ID is rejected and a new one is created.
    This prevents an attack that forces users to use a known session ID.
    An attacker may paste links or send emails that contains the session ID.
    E.g. <code class="literal">http://example.com/page.php?PHPSESSID=123456789</code> if
    <a href="session.configuration.php#ini.session.use-trans-sid" class="link">session.use_trans_sid</a>
    is enabled, the victim will start a session using the session ID provided
    by the attacker.
    <a href="session.configuration.php#ini.session.use-strict-mode" class="link">session.use_strict_mode</a>
    mitigate this risk.
   </p>

   <div class="warning"><strong class="warning">Warning</strong>
    <p class="simpara">
     User defined save handlers can also support strict session mode by
     implementing session ID validation. All user defined save handlers
     should implement session ID validation.
    </p>
   </div>

   <p class="para">
    The session ID cookie may be set with the domain, path, httponly,
    secure and, as of PHP 7.3, SameSite attributes.
    
    There is precedence defined by browsers.
    By using the precedence, an attacker can set session ID that
    could be used permanently. Use of
    <a href="session.configuration.php#ini.session.use-only-cookies" class="link">session.use_only_cookies</a>
    will not solve this issue.
    <a href="session.configuration.php#ini.session.use-strict-mode" class="link">session.use_strict_mode</a>
    mitigates this risk. With
    <a href="session.configuration.php#ini.session.use-strict-mode" class="link">session.use_strict_mode</a>=On,
    the uninitialized session ID will be refused.
   </p>

   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <span class="simpara">
     Even though
     <a href="session.configuration.php#ini.session.use-strict-mode" class="link">session.use_strict_mode</a>
     mitigates the risk of adaptive session management, an attacker can force
     users to use an initialized session ID which has been created by an attacker.
     E.g. JavaScript injection.
     This attack can be mitigated by this manual&#039;s recommendations.
    </span>

    <span class="simpara">
     By following this manual, developers should enable,
     <a href="session.configuration.php#ini.session.use-strict-mode" class="link">session.use_strict_mode</a>,
     use timestamp based session management, and regenerate session IDs using
     <span class="function"><a href="function.session-regenerate-id.php" class="function">session_regenerate_id()</a></span> with recommended procedures.
     If developers follow all of the above, an attacker generated session ID
     will eventually be deleted.
    </span>

    <span class="simpara">
     When access to an obsolete session occurs, developers should save all
     active session data of the user. As this information will be relevant
     for an ensuing investigation. The user should be forcefully logged out
     of all sessions, i.e. require them to reauthenticate.
     This prevents attackers from abusing stolen sessions.
    </span>
   </p></blockquote>

   <div class="warning"><strong class="warning">Warning</strong>
    <p class="simpara">
     Access to an obsolete session does not necessarily suggest an attack.
     An unstable network and/or immediate deletion of the active session
     will result in legitimate users using obsolete sessions.
    </p>
   </div>

   <p class="para">
    As of PHP 7.1.0, <span class="function"><a href="function.session-create-id.php" class="function">session_create_id()</a></span> has been added.
    This function may be operated to access all active sessions of a user
    efficiently by prefixing the session IDs with the user ID. Enabling
    <a href="session.configuration.php#ini.session.use-strict-mode" class="link">session.use_strict_mode</a>
    is vital with this setup. Otherwise, malicious users can set
    malicious session ID for other users.
   </p>

   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <span class="simpara">
     Users prior to PHP 7.1.0 <em>should</em> use
     <abbr title="Cryptographically Secure PseudoRandom Number Generator">CSPRNG</abbr>, e.g. <var class="filename">/dev/urandom</var>, or
     <span class="function"><a href="function.random-bytes.php" class="function">random_bytes()</a></span> and hash functions to generate
     a new session ID. <span class="function"><a href="function.session-create-id.php" class="function">session_create_id()</a></span> has
     collision detection and generates a session ID according to the
     session&#039;s INI settings.
     Use of <span class="function"><a href="function.session-create-id.php" class="function">session_create_id()</a></span> is preferred.
    </span>
   </p></blockquote>

  </div>

  <div class="sect2" id="features.session.security.management.session-id-regeneration">
   <h3 class="title">Session ID Regeneration</h3>

   <p class="para">
    <a href="session.configuration.php#ini.session.use-strict-mode" class="link">session.use_strict_mode</a>
    is a good mitigation, however not sufficient. Developers must equally use
    <span class="function"><a href="function.session-regenerate-id.php" class="function">session_regenerate_id()</a></span> for session security.
   </p>

   <p class="para">
    Session ID regeneration reduces the risk of stolen session IDs, thus
    <span class="function"><a href="function.session-regenerate-id.php" class="function">session_regenerate_id()</a></span> must be called periodically.
    E.g. Regenerate the session ID every 15 minutes for security sensitive content.
    Even in the case that a session ID is stolen, both the legitimate
    user&#039;s and the attacker&#039;s session will expire.
    In other words access by the user or the attacker will
    generate an obsolete session access error.
   </p>

   <p class="para">
    Session IDs <em>must</em> be regenerated when user privileges
    are elevated, such as after authenticating.
    <span class="function"><a href="function.session-regenerate-id.php" class="function">session_regenerate_id()</a></span> must be called prior to
    setting the authentication information to <var class="varname"><a href="reserved.variables.session.php" class="classname">$_SESSION</a></var>.
    (<span class="function"><a href="function.session-regenerate-id.php" class="function">session_regenerate_id()</a></span> saves the current session data
    automatically in order to save timestamp/etc. to the current session.)
    Ensure only the new session contains the authenticated flag.
   </p>

   <p class="para">
    Developers <em>must not</em> rely on session ID expiration by
    <a href="session.configuration.php#ini.session.gc-maxlifetime" class="link">session.gc_maxlifetime</a>.
    Attackers may access a victim&#039;s session ID periodically to prevent its
    expiration and keep exploiting it, including an authenticated session.
   </p>

   <p class="para">
     Instead, developers must implement timestamp based session data management.
   </p>

   <div class="warning"><strong class="warning">Warning</strong>
    <p class="simpara">
     Although the session manager can manage timestamps transparently,
     this feature is not implemented. Old session data must be kept until GC.
     Simultaneously, developers must assure themselves obsolete session data
     is removed. However, developers must not remove active session data immediately.
     I.e. <code class="code">session_regenerate_id(true);</code> and
     <span class="function"><a href="function.session-destroy.php" class="function">session_destroy()</a></span> must never be called together for an active session.
     This may sound contradictory, but this is a mandatory requirement.
    </p>
   </div>

   <p class="para">
    <span class="function"><a href="function.session-regenerate-id.php" class="function">session_regenerate_id()</a></span> does <em>not</em>
    delete outdated sessions by default.
    Obsolete authenticated sessions may be present for use.
    Developers must prevent outdated sessions to be consumed by anyone.
    They must prohibit access to obsolete session data by themselves using timestamps.
   </p>

   <div class="warning"><strong class="warning">Warning</strong>
    <p class="simpara">
     The sudden removal of an active session produces undesirable side effects.
     Sessions can vanish when there are concurrent connections to the web
     application and/or the network is unstable.
    </p>
    <p class="simpara">
     Potential malicious access is undetectable with the sudden removal of active sessions.
    </p>
    <p class="simpara">
     Instead of deleting outdated sessions immediately, developers must set a
     short-term expiration time (timestamp) in <var class="varname"><a href="reserved.variables.session.php" class="classname">$_SESSION</a></var>,
     and prohibit access to the session data by themselves.
    </p>
    <p class="simpara">
     Developers must not prohibit access to old session data immediately after
     <span class="function"><a href="function.session-regenerate-id.php" class="function">session_regenerate_id()</a></span>. It must be prohibited at a
     later stage. E.g. a few seconds later for stable networks, like a wired network,
     and a few minutes later for unstable networks such as cell phones or Wi-Fi.
    </p>
    <p class="simpara">
     If a user accesses an obsolete session (expired session), access to it should be denied.
     It is also recommended to remove the authenticated status from all of the user&#039;s
     sessions to as it is likely to represent an attack.
    </p>
   </div>

   <p class="para">
    Proper use of <a href="session.configuration.php#ini.session.use-only-cookies" class="link">session.use_only_cookies</a>
    and <span class="function"><a href="function.session-regenerate-id.php" class="function">session_regenerate_id()</a></span> can cause personal DoS with
    undeletable cookies set by attackers. In this case, developers may invite users
    to remove cookies and advise them they may be affected by a security issue.
    Attackers may set malicious cookies via a vulnerable web application,
    an exposed/vicious browser plugin, a physically compromised device, etc.
   </p>

   <div class="warning"><strong class="warning">Warning</strong>
    <p class="simpara">
     Do not misunderstand the DoS risk.
     <a href="session.configuration.php#ini.session.use-strict-mode" class="link">session.use_strict_mode</a>=On
     is mandatory for general session ID security! All sites are advised to enable
     <a href="session.configuration.php#ini.session.use-strict-mode" class="link">session.use_strict_mode</a>.
    </p>
    <p class="simpara">
     DoS can only happen when the account is under attack. A JavaScript injection
     vulnerability in an application represents the most common cause.
    </p>
   </div>

  </div>

  <div class="sect2" id="features.session.security.management.session-data-deletion">
   <h3 class="title">Session Data Deletion</h3>

   <p class="para">
    Obsolete session data must be inaccessible and deleted.
    The current session module does not handle this well.
   </p>

   <p class="para">
    Obsolete session data should be removed as soon as possible.
    However, active sessions must not be removed instantly.
    To satisfy those requirements, developers must implement timestamp
    based session data management by themselves.
   </p>

   <p class="para">
    Set and manage expiration timestamp in $_SESSION.
    Prohibit access to outdated session data.
    When access to obsolete session data is detected, it is advised to remove all 
    authenticated status from the user&#039;s sessions and force them to re-authenticate.
    Access to obsolete session data can represent an attack.
    To achieve this, developers must keep track of all active sessions of every user.
   </p>

   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <span class="simpara">
     Access to an obsolete session can also happen because of an unstable network
     and/or concurrent access to the website.
     E.g. the server tried to set a new session ID via a cookie, but the Set-Cookie
     packet may not have reached the client due to loss of connection.
     One connection may issue a new session ID by <span class="function"><a href="function.session-regenerate-id.php" class="function">session_regenerate_id()</a></span>,
     but another concurrent connection may not have received the new session ID yet.
     Therefore, developers must prohibit access to obsolete session at a later stage.
     I.e. timestamp based session management is mandatory.
    </span>
   </p></blockquote>

   <p class="para">
    In summary, session data must not be destroyed with
    <span class="function"><a href="function.session-regenerate-id.php" class="function">session_regenerate_id()</a></span> nor <span class="function"><a href="function.session-destroy.php" class="function">session_destroy()</a></span>,
    but timestamps must be used to control access to session data.
    Let <span class="function"><a href="function.session-gc.php" class="function">session_gc()</a></span> remove obsolete data from the session data storage.
   </p>

  </div>

  <div class="sect2" id="features.session.security.management.session-locking">
   <h3 class="title">Session and Locking</h3>

   <p class="para">
    Session data is locked to avoid race conditions by default.
    Locking is mandatory to keep session data consistent across requests.
   </p>

   <p class="para">
    However, session-locking can be abused by attackers to perform DoS attacks.
    To mitigate the risk of a DoS attack by session-locking, minimize locks.
    Use read only sessions when session data does not need to be updated.
    Use the &#039;read_and_close&#039; option with <span class="function"><a href="function.session-start.php" class="function">session_start()</a></span>.
    <code class="code">session_start([&#039;read_and_close&#039;=&gt;1]);</code>
    Close the session as soon as possible after updating $_SESSION by
    using <span class="function"><a href="function.session-commit.php" class="function">session_commit()</a></span>.
   </p>

   <p class="para">
    The current session module does <em>not</em>
    detect any modification of $_SESSION when the session is inactive.
    It is the developer&#039;s responsibility not to modify $_SESSION when
    the session is inactive.
   </p>

  </div>

  <div class="sect2" id="features.session.security.management.active-sessions">
   <h3 class="title">Active Sessions</h3>

   <p class="para">
    Developers should keep track of all active sessions for every user.
    And notify them of how many active sessions, from which IP (and area),
    how long it has been active, etc.
    PHP does not keep track of these. Developers are supposed to do so.
   </p>

   <p class="para">
    Various ways to implement this exist.
    One possible implementation is setting up a database that keeps track
    of the required data and stores any relevant information.
    Since session data is GCed, developers must take care of the GCed data
    to maintain the active session database consistency.
   </p>

   <p class="para">
    One of the simplest implementations is &quot;User ID prefixed session ID&quot;
    and store the required information in $_SESSION.
    Many databases posses good performance for selecting string prefix.
    Developers MAY use <span class="function"><a href="function.session-regenerate-id.php" class="function">session_regenerate_id()</a></span> and
    <span class="function"><a href="function.session-create-id.php" class="function">session_create_id()</a></span> for this.
   </p>

   <div class="warning"><strong class="warning">Warning</strong>
    <p class="simpara">
     Never employ confidential data as a prefix.
     If the user ID is confidential, consider using
     <span class="function"><a href="function.hash-hmac.php" class="function">hash_hmac()</a></span>.
    </p>
   </div>

   <div class="warning"><strong class="warning">Warning</strong>
    <p class="simpara">
     Enabling <a href="session.configuration.php#ini.session.use-strict-mode" class="link">session.use_strict_mode</a>
     is mandatory for this setup. Ensure it is enabled.
     Otherwise, the active session database can be compromised.
    </p>
   </div>

   <p class="para">
    Timestamp based session management is mandatory to detect access to obsolete sessions.
    When access to an obsolete session is detected, authentication flags should
    be removed from all active sessions of the user.
    This prevents attackers to keep exploiting stolen sessions.
   </p>

  </div>

  <div class="sect2" id="features.session.security.management.session-and-autologin">
   <h3 class="title">Session and Auto-login</h3>

   <p class="para">
    Developers must not use long life session IDs for auto-login because it
    increases the risk of stolen sessions.
    An auto-login feature should be implemented by the developer.
   </p>

   <p class="para">
    Use a secure one time hash key as an auto-login key using
    <span class="function"><a href="function.setcookie.php" class="function">setcookie()</a></span>. Use a secure hash stronger than SHA-2.
    E.g. SHA-256 or greater with random data from <span class="function"><a href="function.random-bytes.php" class="function">random_bytes()</a></span>
    or <var class="filename">/dev/urandom</var>.
   </p>

   <p class="para">
    If the user is unauthenticated, check whether the one-time auto-login key is valid or not.
    In the case it is valid, authenticate the user and set a new secure one-time hash key.
    An auto-login key must only be used once, i.e. never reuse an auto-login key,
    always generate a new one.
   </p>

   <p class="para">
    An auto-login key is a long life authentication key,
    it should be protected as much as possible.
    Use path/httponly/secure/SameSite cookie attributes to secure it.
    I.e. never transmit the auto-login key unless required.
   </p>

   <p class="para">
    Developer must implement the features that disables
    auto-login and removes unneeded auto-login key cookie.
   </p>

  </div>

  <div class="sect2" id="features.session.security.management.csrf">
   <h3 class="title">CSRF (Cross-Site Request Forgeries) attacks</h3>

   <p class="para">
    Sessions and authentication do not protect against CSRF attacks.
    Developers must implement CSRF protection by themselves.
   </p>

   <p class="para">
    <span class="function"><a href="function.output-add-rewrite-var.php" class="function">output_add_rewrite_var()</a></span> can be used for CSRF protection.
    Refer to the manual page for more details.
   </p>

   <blockquote class="note"><p><strong class="note">Note</strong>: 
    <span class="simpara">
     PHP prior to 7.2.0 uses the same output buffer and INI setting as trans sid.
     Therefore, use of <span class="function"><a href="function.output-add-rewrite-var.php" class="function">output_add_rewrite_var()</a></span>
     with PHP prior to version 7.2.0 is not advised.
    </span>
   </p></blockquote>

   <p class="para">
    Most web application frameworks support CSRF protection.
    Refer to the web application framework manual for more details.
   </p>

   <p class="para">
    As of PHP 7.3 the SameSite attribute for the session cookie can be set.
    This is an additional measure which can mitigate CSRF vulnerabilities.
   </p>
  </div>
 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/session/security.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffeatures.session.security.management%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=features.session.security.management&amp;repo=en&amp;redirect=https://www.php.net/manual/en/features.session.security.management.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="session.security.php">Sessions and Security</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="features.session.security.management.php" title="Session Management Basics">Session Management Basics</a>
                        </li>
                                                <li class="">
                            <a href="session.security.ini.php" title="Securing Session INI Settings">Securing Session INI Settings</a>
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
