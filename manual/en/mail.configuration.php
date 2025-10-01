<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Runtime Configuration - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/mail.configuration.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/mail.configuration.php">
 <link rel="alternate" href="https://www.php.net/manual/en/mail.configuration.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/mail.setup.php">
 <link rel="prev" href="https://www.php.net/manual/en/mail.requirements.php">
 <link rel="next" href="https://www.php.net/manual/en/ref.mail.php">

 <link rel="alternate" href="https://www.php.net/manual/en/mail.configuration.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/mail.configuration.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/mail.configuration.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/mail.configuration.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/mail.configuration.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/mail.configuration.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/mail.configuration.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/mail.configuration.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/mail.configuration.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/mail.configuration.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/mail.configuration.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Runtime Configuration" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Runtime Configuration - Manual" />
<meta name="twitter:description" content="Runtime Configuration" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Runtime Configuration - Manual" />
<meta itemprop="description" content="Runtime Configuration" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Runtime Configuration" />

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
        <a href="ref.mail.php">
          Mail Functions &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="mail.requirements.php">
          &laquo; Requirements        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.mail.php'>Mail Related Extensions</a></li>      <li><a href='book.mail.php'>Mail</a></li>      <li><a href='mail.setup.php'>Installing/Configuring</a></li>      </ul>
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
            <option value='en/mail.configuration.php' selected="selected">English</option>
            <option value='de/mail.configuration.php'>German</option>
            <option value='es/mail.configuration.php'>Spanish</option>
            <option value='fr/mail.configuration.php'>French</option>
            <option value='it/mail.configuration.php'>Italian</option>
            <option value='ja/mail.configuration.php'>Japanese</option>
            <option value='pt_BR/mail.configuration.php'>Brazilian Portuguese</option>
            <option value='ru/mail.configuration.php'>Russian</option>
            <option value='tr/mail.configuration.php'>Turkish</option>
            <option value='uk/mail.configuration.php'>Ukrainian</option>
            <option value='zh/mail.configuration.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="mail.configuration" class="section">
 <h2 class="title">Runtime Configuration</h2>
 <p class="simpara">
The behaviour of these functions is affected by settings in <var class="filename">php.ini</var>.
</p>
 <p class="para">
 <table class="doctable table">
  <caption><strong>Mail configuration options</strong></caption>
  
   <thead>
    <tr>
     <th>Name</th>
     <th>Default</th>
     <th>Changeable</th>
     <th>Changelog</th>
    </tr>

   </thead>

   <tbody class="tbody">
    <tr>
     <td><a href="mail.configuration.php#ini.mail.add-x-header" class="link">mail.add_x_header</a></td>
     <td>&quot;0&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr>
     <td><a href="mail.configuration.php#ini.mail.mixed_lf_and_crlf" class="link">mail.mixed_lf_and_crlf</a></td>
     <td>&quot;0&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong>|<strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong></td>
     <td>Added in PHP 8.2.4</td>
    </tr>

    <tr>
     <td><a href="mail.configuration.php#ini.mail.log" class="link">mail.log</a></td>
     <td>NULL</td>
     <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong>|<strong><code><a href="info.constants.php#constant.ini-perdir">INI_PERDIR</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr>
     <td><a href="mail.configuration.php#ini.mail.force_extra_parameters" class="link">mail.force_extra_parameters</a></td>
     <td>NULL</td>
     <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr>
     <td><a href="mail.configuration.php#ini.smtp" class="link">SMTP</a></td>
     <td>&quot;localhost&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr>
     <td><a href="mail.configuration.php#ini.smtp-port" class="link">smtp_port</a></td>
     <td>&quot;25&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr>
     <td><a href="mail.configuration.php#ini.sendmail-from" class="link">sendmail_from</a></td>
     <td>NULL</td>
     <td><strong><code><a href="info.constants.php#constant.ini-all">INI_ALL</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

    <tr>
     <td><a href="mail.configuration.php#ini.sendmail-path" class="link">sendmail_path</a></td>
     <td>&quot;/usr/sbin/sendmail -t -i&quot;</td>
     <td><strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong></td>
     <td class="empty">&nbsp;</td>
    </tr>

   </tbody>
  
 </table>

 For further details and definitions of the
INI_* modes, see the <a href="configuration.changes.modes.php" class="xref">Where a configuration setting may be set</a>.
 </p>
 
 <p class="para">Here&#039;s a short explanation of
the configuration directives.</p>
 
 <p class="para">
 <dl>
  
   <dt id="ini.mail.add-x-header">
    <code class="parameter">mail.add_x_header</code>
    <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
   </dt>
   <dd>
    <p class="para">
     Add <code class="literal">X-PHP-Originating-Script</code> that will include UID of
     the script followed by the filename.
    </p>
   </dd>
  

  
   <dt id="ini.mail.log">
    <code class="parameter">mail.log</code>
    <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
   </dt>
   <dd>
    <p class="para">
     The path to a log file that will log all <span class="function"><a href="function.mail.php" class="function">mail()</a></span> calls.
     Log entries include the full path of the script, line number,
     <code class="literal">To</code> address and headers.
    </p>
   </dd>
  

  
   <dt id="ini.mail.mixed_lf_and_crlf">
    <code class="parameter">mail.mixed_lf_and_crlf</code>
    <span class="type"><a href="language.types.boolean.php" class="type bool">bool</a></span>
   </dt>
   <dd>
    <p class="para">
     Allows reverting the line separator for email headers and message bodies to LF (Line Feed),
     mimicking the non-compliant behavior of PHP 7. It is provided as a compatibility measure
     for certain non-compliant Mail Transfer Agents (MTAs) that fail to correctly process CRLF
     (Carriage Return + Line Feed) as a line separator in email headers and message content.
    </p>
   </dd>
  

  
   <dt id="ini.mail.force_extra_parameters">
    <code class="parameter">mail.force_extra_parameters</code>
    <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
   </dt>
   <dd>
    <p class="para">
     Force the addition of the specified parameters to be passed as extra
     parameters to the sendmail binary. These parameters will always replace
     the value of the 5th parameter to <span class="function"><a href="function.mail.php" class="function">mail()</a></span>.
    </p>
    <span class="simpara">
     In addition to the default behavior for <strong><code><a href="info.constants.php#constant.ini-system">INI_SYSTEM</a></code></strong>,
     this value can also be set with <code class="literal">php_value</code>
     in <var class="filename">httpd.conf</var> (but this is not recommended).
    </span>
   </dd>
  

  
   <dt id="ini.smtp">
    <code class="parameter">SMTP</code>
    <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
   </dt>
   <dd>
    <p class="para">
     Used under Windows only: host name or IP address of the SMTP server PHP
     should use for mail sent with the <span class="function"><a href="function.mail.php" class="function">mail()</a></span> function.
    </p>
   </dd>
  

  
   <dt id="ini.smtp-port">
    <code class="parameter">smtp_port</code>
    <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>
   </dt>
   <dd>
    <p class="para">
     Used under Windows only: Number of the port to connect to the server
     specified with the <code class="literal">SMTP</code> setting when sending mail
     with <span class="function"><a href="function.mail.php" class="function">mail()</a></span>; defaults to 25.
    </p>
   </dd>
  

  
   <dt id="ini.sendmail-from">
    <code class="parameter">sendmail_from</code>
    <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
   </dt>
   <dd>
    <p class="para">
     Which <code class="literal">&quot;From:&quot;</code> mail address should be used in mail sent
     directly via SMTP (Windows only).
     This directive also sets the <code class="literal">&quot;Return-Path:&quot;</code> header.
    </p>
   </dd>
  

  
   <dt id="ini.sendmail-path">
    <code class="parameter">sendmail_path</code>
    <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
   </dt>
   <dd>
    <p class="para">
     Where the <strong class="command">sendmail</strong> program can be found,
     usually <var class="filename">/usr/sbin/sendmail</var> or
     <var class="filename">/usr/lib/sendmail</var>.
     <strong class="command">configure</strong> does an honest attempt of
     locating this one for you and set a default, but if it fails,
     you can set it here.
    </p>
    <p class="para">
     Systems not using <strong class="command">sendmail</strong> should set this directive to the
     sendmail wrapper/replacement their mail system offers, if any.
     For example, <a href="http://cr.yp.to/qmail.html" class="link external">&raquo;&nbsp;Qmail</a>
     users can normally set it to
     <var class="filename">/var/qmail/bin/sendmail</var> or <var class="filename">
     /var/qmail/bin/qmail-inject</var>.
    </p>
    <p class="para">
     <strong class="command">qmail-inject</strong> does not require any option to
     process mail correctly.
    </p>
    <p class="para">
     This directive works also under Windows. If set, <var class="varname">smtp</var>,
     <var class="varname">smtp_port</var> and <var class="varname">sendmail_from</var> are
     ignored and the specified command is executed.
    </p>
   </dd>
  
 </dl>

 </p>
</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/mail/ini.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fmail.configuration%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=mail.configuration&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mail.configuration.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="113849">  <div class="votes">
    <div id="Vu113849">
    <a href="/manual/vote-note.php?id=113849&amp;page=mail.configuration&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd113849">
    <a href="/manual/vote-note.php?id=113849&amp;page=mail.configuration&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V113849" title="54% like this...">
    27
    </div>
  </div>
  <a href="#113849" class="name">
  <strong class="user"><em>elitescripts2000 at yahoo dot com</em></strong></a><a class="genanchor" href="#113849"> &para;</a><div class="date" title="2013-12-08 07:52"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom113849">
<div class="phpcode"><code><span class="html">On Ubuntu 13.04, not sure of the other Distros. <br /><br />If you simply uncomment the default:<br /><br />sendmail_path = "sendmail -t -i"<br /><br />Your mail() functions will all fail.  This is because, you should place the FULL PATH (i.e.  /usr/sbin/sendmail -t -i ) <br /><br />The documentation states PHP tries it's best to find the correct sendmail path, but it clearly failed for me.<br /><br />So, always enter in the FULLPATH to sendmail or you may get unexpected failing results.<br /><br />As a secondary note:  Those that just want to ENFORCE the -f parameter, you can do so in php.ini using: <br /><br />mail.force_extra_parameters = -fdo_not_reply@domain.tld<br /><br />You can leave the sendmail path commented out, it will still use the defaults  (under UNIX  -t -i options which if you look them up are very important to have set)....<br /><br />But, now there is no way to change this, even with the 5th argument of the mail() function.  -f is important, because if NOT set, will be set to which ever user the PHP script is running under, and you may not want that.<br /><br />Also, -f  sets the Return-Path:  header which is used as the Bounce address, if errors occur, so you can process them.  You you can not set Return-Path: in mail() headers for some reason... you could before.  Now you have to use the -f option.</span></code></div>
  </div>
 </div>
  <div class="note" id="127153">  <div class="votes">
    <div id="Vu127153">
    <a href="/manual/vote-note.php?id=127153&amp;page=mail.configuration&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127153">
    <a href="/manual/vote-note.php?id=127153&amp;page=mail.configuration&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127153" title="55% like this...">
    2
    </div>
  </div>
  <a href="#127153" class="name">
  <strong class="user"><em>jscholz at wisc dot edu</em></strong></a><a class="genanchor" href="#127153"> &para;</a><div class="date" title="2022-06-02 08:06"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127153">
<div class="phpcode"><code><span class="html">The documentation should be made clear that sendmail does NOT default to -t -i when using just /usr/sbin/sendmail. You literally need to specify the options. <br /><br />I know this might seem like a no-brainer but I wasted hours trying to get mail() to work only to discover that the sendmail program is NOT passed -t and -i by default as stipulated in the documentation.</span></code></div>
  </div>
 </div>
  <div class="note" id="120177">  <div class="votes">
    <div id="Vu120177">
    <a href="/manual/vote-note.php?id=120177&amp;page=mail.configuration&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd120177">
    <a href="/manual/vote-note.php?id=120177&amp;page=mail.configuration&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V120177" title="50% like this...">
    1
    </div>
  </div>
  <a href="#120177" class="name">
  <strong class="user"><em>php dot net at ii0 dot net</em></strong></a><a class="genanchor" href="#120177"> &para;</a><div class="date" title="2016-11-16 08:46"><strong>8 years ago</strong></div>
  <div class="text" id="Hcom120177">
<div class="phpcode"><code><span class="html">If anyone gets this cryptic error message in the PHP error logs:<br />"sh: -t: command not found"<br />after upgrading from PHP 5.4, this may be the solution for you.<br /><br />I upgraded PHP from 5.4 to 5.6 and all our mail() functionality suddenly broke, with no useful error logging.<br /><br />If this is you, and you've been using ini_set() to set the "sendmail_path" then note that even though it's apparently not mentioned in the upgrade documentation -- or anywhere else I could find on php.net (or a dozen forums) -- you'll now need to go set the sendmail_path in your php.ini file; it is now ignored if you use ini_set() to specify a path to the sendmail binary on the fly.<br /><br />So, just specify "sendmail_path" in php.ini instead.  That's all there is to it -- that fixed all the mail() functionality for us.  <br /><br />Hope this little note saves someone else as much time as I spent troubleshooting and researching.  Cheers!</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=mail.configuration&amp;repo=en&amp;redirect=https://www.php.net/manual/en/mail.configuration.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="mail.setup.php">Installing/Configuring</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="mail.requirements.php" title="Requirements">Requirements</a>
                        </li>
                                                <li class="current">
                            <a href="mail.configuration.php" title="Runtime Configuration">Runtime Configuration</a>
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
