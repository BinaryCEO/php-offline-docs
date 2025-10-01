<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: RADIUS Attribute Types - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/radius.constants.attributes.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/radius.constants.attributes.php">
 <link rel="alternate" href="https://www.php.net/manual/en/radius.constants.attributes.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/radius.constants.php">
 <link rel="prev" href="https://www.php.net/manual/en/radius.constants.packets.php">
 <link rel="next" href="https://www.php.net/manual/en/radius.constants.vendor-specific.php">

 <link rel="alternate" href="https://www.php.net/manual/en/radius.constants.attributes.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/radius.constants.attributes.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/radius.constants.attributes.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/radius.constants.attributes.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/radius.constants.attributes.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/radius.constants.attributes.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/radius.constants.attributes.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/radius.constants.attributes.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/radius.constants.attributes.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/radius.constants.attributes.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/radius.constants.attributes.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="RADIUS Attribute Types" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: RADIUS Attribute Types - Manual" />
<meta name="twitter:description" content="RADIUS Attribute Types" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: RADIUS Attribute Types - Manual" />
<meta itemprop="description" content="RADIUS Attribute Types" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="RADIUS Attribute Types" />

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
        <a href="radius.constants.vendor-specific.php">
          RADIUS Vendor Specific Attribute Types &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="radius.constants.packets.php">
          &laquo; RADIUS Packet Types        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.auth.php'>Authentication Services</a></li>      <li><a href='book.radius.php'>Radius</a></li>      <li><a href='radius.constants.php'>Predefined Constants</a></li>      </ul>
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
            <option value='en/radius.constants.attributes.php' selected="selected">English</option>
            <option value='de/radius.constants.attributes.php'>German</option>
            <option value='es/radius.constants.attributes.php'>Spanish</option>
            <option value='fr/radius.constants.attributes.php'>French</option>
            <option value='it/radius.constants.attributes.php'>Italian</option>
            <option value='ja/radius.constants.attributes.php'>Japanese</option>
            <option value='pt_BR/radius.constants.attributes.php'>Brazilian Portuguese</option>
            <option value='ru/radius.constants.attributes.php'>Russian</option>
            <option value='tr/radius.constants.attributes.php'>Turkish</option>
            <option value='uk/radius.constants.attributes.php'>Ukrainian</option>
            <option value='zh/radius.constants.attributes.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="radius.constants.attributes" class="section">
  <h2 class="title">RADIUS Attribute Types</h2>

  <p class="para">
   These constants define RADIUS attribute types that can be used with
   <span class="function"><a href="function.radius-put-addr.php" class="function">radius_put_addr()</a></span>, <span class="function"><a href="function.radius-put-attr.php" class="function">radius_put_attr()</a></span>,
   <span class="function"><a href="function.radius-put-int.php" class="function">radius_put_int()</a></span> and
   <span class="function"><a href="function.radius-put-string.php" class="function">radius_put_string()</a></span>.
  </p>

  <dl>
   
    <dt id="constant.radius-user-name">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-user-name">RADIUS_USER_NAME</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      The User-Name attribute. The attribute value is expected to be a
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span> containing the name of the user being authenticated,
      and can be set using <span class="function"><a href="function.radius-put-attr.php" class="function">radius_put_attr()</a></span>.
     </p>
    </dd>
   
   
    <dt id="constant.radius-user-password">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-user-password">RADIUS_USER_PASSWORD</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      The User-Password attribute. The attribute value is expected to be a
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span> containing the user&#039;s password, and can be set using
      <span class="function"><a href="function.radius-put-attr.php" class="function">radius_put_attr()</a></span>. This value will be obfuscated on
      transmission as described in
      <a href="https://datatracker.ietf.org/doc/html/rfc2865" class="link external">&raquo;&nbsp;section 5.2 of RFC 2865</a>.
     </p>
    </dd>
   
   
    <dt id="constant.radius-chap-password">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-chap-password">RADIUS_CHAP_PASSWORD</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      The Chap-Password attribute. The attribute value is expected to be a
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span> with the first byte containing the CHAP identifier,
      and the subsequent 16 bytes containing the MD5 hash of the CHAP
      identifier, the plaintext password and the CHAP challenge value
      concatenated together. Note that the CHAP challenge value should also be
      sent separately in a
      <a href="radius.constants.attributes.php#constant.radius-chap-challenge" class="link"><strong><code><a href="radius.constants.attributes.php#constant.radius-chap-challenge">RADIUS_CHAP_CHALLENGE</a></code></strong></a>
      attribute.
     </p>
     <p class="para">
      <div class="example" id="example-768">
       <p><strong>Example #1 Using CHAP passwords</strong></p>
       <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #FF8000">// Firstly, we'll create an authentication handle and request.<br /></span><span style="color: #0000BB">$radh </span><span style="color: #007700">= </span><span style="color: #0000BB">radius_auth_open</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">radius_add_server</span><span style="color: #007700">(</span><span style="color: #0000BB">$radh</span><span style="color: #007700">, </span><span style="color: #0000BB">$server</span><span style="color: #007700">, </span><span style="color: #0000BB">$port</span><span style="color: #007700">, </span><span style="color: #0000BB">$secret</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">, </span><span style="color: #0000BB">3</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">radius_create_request</span><span style="color: #007700">(</span><span style="color: #0000BB">$radh</span><span style="color: #007700">, </span><span style="color: #0000BB">RADIUS_ACCESS_REQUEST</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Assuming $password contains the plaintext password, we now:<br /><br />// Generate a challenge.<br /></span><span style="color: #0000BB">$challenge </span><span style="color: #007700">= </span><span style="color: #0000BB">mt_rand</span><span style="color: #007700">();<br /><br /></span><span style="color: #FF8000">// Specify a CHAP identifier.<br /></span><span style="color: #0000BB">$ident </span><span style="color: #007700">= </span><span style="color: #0000BB">1</span><span style="color: #007700">;<br /><br /></span><span style="color: #FF8000">// Add the Chap-Password attribute.<br /></span><span style="color: #0000BB">$cp </span><span style="color: #007700">= </span><span style="color: #0000BB">hash</span><span style="color: #007700">(</span><span style="color: #DD0000">'md5'</span><span style="color: #007700">, </span><span style="color: #0000BB">pack</span><span style="color: #007700">(</span><span style="color: #DD0000">'Ca*'</span><span style="color: #007700">, </span><span style="color: #0000BB">$ident</span><span style="color: #007700">, </span><span style="color: #0000BB">$password</span><span style="color: #007700">.</span><span style="color: #0000BB">$challenge</span><span style="color: #007700">), </span><span style="color: #0000BB">true</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">radius_put_attr</span><span style="color: #007700">(</span><span style="color: #0000BB">$radh</span><span style="color: #007700">, </span><span style="color: #0000BB">RADIUS_CHAP_PASSWORD</span><span style="color: #007700">, </span><span style="color: #0000BB">pack</span><span style="color: #007700">(</span><span style="color: #DD0000">'C'</span><span style="color: #007700">, </span><span style="color: #0000BB">$ident</span><span style="color: #007700">).</span><span style="color: #0000BB">$cp</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">// Add the Chap-Challenge attribute.<br /></span><span style="color: #0000BB">radius_put_attr</span><span style="color: #007700">(</span><span style="color: #0000BB">$radh</span><span style="color: #007700">, </span><span style="color: #0000BB">RADIUS_CHAP_CHALLENGE</span><span style="color: #007700">, </span><span style="color: #0000BB">$challenge</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">/* From here, you would add the remaining attributes and<br /> * call radius_send_request(). */<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
       </div>

      </div>
     </p>
    </dd>
   
   
    <dt id="constant.radius-nas-ip-address">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-nas-ip-address">RADIUS_NAS_IP_ADDRESS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      The NAS-IP-Address attribute. The attribute value is expected to the IP
      address of the RADIUS client encoded as an <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>, which
      can be set using <span class="function"><a href="function.radius-put-addr.php" class="function">radius_put_addr()</a></span>.
     </p>
    </dd>
   
   
    <dt id="constant.radius-nas-port">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-nas-port">RADIUS_NAS_PORT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      The NAS-Port attribute. The attribute value is expected to be the
      physical port of the user on the RADIUS client encoded as an
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>, which can be set using
      <span class="function"><a href="function.radius-put-int.php" class="function">radius_put_int()</a></span>.
     </p>
    </dd>
   
   
    <dt id="constant.radius-service-type">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-service-type">RADIUS_SERVICE_TYPE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      The Service-Type attribute. The attribute value indicates the service
      type the user is requesting, and is expected to be an
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>, which can be set using
      <span class="function"><a href="function.radius-put-int.php" class="function">radius_put_int()</a></span>.
     </p>
     <p class="para">
      A number of constants are provided to represent the possible values of
      this attribute. They include:
      <ul class="simplelist">
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-login">RADIUS_LOGIN</a></code></strong></li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-framed">RADIUS_FRAMED</a></code></strong></li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-callback-login">RADIUS_CALLBACK_LOGIN</a></code></strong></li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-callback-framed">RADIUS_CALLBACK_FRAMED</a></code></strong></li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-outbound">RADIUS_OUTBOUND</a></code></strong></li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-administrative">RADIUS_ADMINISTRATIVE</a></code></strong></li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-nas-prompt">RADIUS_NAS_PROMPT</a></code></strong></li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-authenticate-only">RADIUS_AUTHENTICATE_ONLY</a></code></strong></li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-callback-nas-prompt">RADIUS_CALLBACK_NAS_PROMPT</a></code></strong></li>
      </ul>
     </p>
    </dd>
   
   
    <dt id="constant.radius-framed-protocol">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-framed-protocol">RADIUS_FRAMED_PROTOCOL</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      The Framed-Protocol attribute. The attribute value is expected to be an
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> indicating the framing to be used for framed
      access, and can be set using <span class="function"><a href="function.radius-put-int.php" class="function">radius_put_int()</a></span>. The
      possible attribute values include these constants:
      <ul class="simplelist">
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-ppp">RADIUS_PPP</a></code></strong></li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-slip">RADIUS_SLIP</a></code></strong></li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-arap">RADIUS_ARAP</a></code></strong></li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-gandalf">RADIUS_GANDALF</a></code></strong></li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-xylogics">RADIUS_XYLOGICS</a></code></strong></li>
      </ul>
     </p>
    </dd>
   
   
    <dt id="constant.radius-framed-ip-address">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-framed-ip-address">RADIUS_FRAMED_IP_ADDRESS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      The Framed-IP-Address attribute. The attribute value is expected to be
      the address of the user&#039;s network encoded as an <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>,
      which can be set using <span class="function"><a href="function.radius-put-addr.php" class="function">radius_put_addr()</a></span> and
      retrieved using <span class="function"><a href="function.radius-cvt-addr.php" class="function">radius_cvt_addr()</a></span>.
     </p>
    </dd>
   
   
    <dt id="constant.radius-framed-ip-netmask">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-framed-ip-netmask">RADIUS_FRAMED_IP_NETMASK</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      The Framed-IP-Netmask attribute. The attribute value is expected to be
      the netmask of the user&#039;s network encoded as an <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>,
      which can be set using <span class="function"><a href="function.radius-put-addr.php" class="function">radius_put_addr()</a></span> and
      retrieved using <span class="function"><a href="function.radius-cvt-addr.php" class="function">radius_cvt_addr()</a></span>.
     </p>
    </dd>
   
   
    <dt id="constant.radius-framed-routing">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-framed-routing">RADIUS_FRAMED_ROUTING</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      The Framed-Routing attribute. The attribute value is expected to be an
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> indicating the routing method for the user, which
      can be set using <span class="function"><a href="function.radius-put-int.php" class="function">radius_put_int()</a></span>.
     </p>
     <p class="para">
      Possible values include:
      <ul class="simplelist">
       <li><code class="literal">0</code>: No routing</li>
       <li><code class="literal">1</code>: Send routing packets</li>
       <li><code class="literal">2</code>: Listen for routing packets</li>
       <li><code class="literal">3</code>: Send and listen</li>
      </ul>
     </p>
    </dd>
   
   
    <dt id="constant.radius-filter-id">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-filter-id">RADIUS_FILTER_ID</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      The Filter-ID attribute. The attribute value is expected to be an
      implementation-specific, human-readable <span class="type"><a href="language.types.string.php" class="type string">string</a></span> of filters,
      which can be set using <span class="function"><a href="function.radius-put-attr.php" class="function">radius_put_attr()</a></span>.
     </p>
    </dd>
   
   
    <dt id="constant.radius-framed-mtu">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-framed-mtu">RADIUS_FRAMED_MTU</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      The Framed-MTU attribute. The attribute value is expected to be an
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> indicating the MTU to be configured for the user,
      and can be set using <span class="function"><a href="function.radius-put-int.php" class="function">radius_put_int()</a></span>.
     </p>
    </dd>
   
   
    <dt id="constant.radius-framed-compression">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-framed-compression">RADIUS_FRAMED_COMPRESSION</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      The Framed-Compression attribute. The attribute value is expected to be
      an <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> indicating the compression protocol to be used,
      and can be set using <span class="function"><a href="function.radius-put-int.php" class="function">radius_put_int()</a></span>. Possible
      values include these constants:
      <ul class="simplelist">
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-comp-none">RADIUS_COMP_NONE</a></code></strong>: No compression</li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-comp-vj">RADIUS_COMP_VJ</a></code></strong>: VJ TCP/IP header compression</li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-comp-ipxhdr">RADIUS_COMP_IPXHDR</a></code></strong>: IPX header compression</li>
       <li>
        <strong><code><a href="radius.constants.attributes.php#constant.radius-comp-stac-lzs">RADIUS_COMP_STAC_LZS</a></code></strong>:
        Stac-LZS compression (added in PECL radius 1.3.0b2)
       </li>
      </ul>
     </p>
    </dd>
   
   
    <dt id="constant.radius-login-ip-host">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-login-ip-host">RADIUS_LOGIN_IP_HOST</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      The Login-IP-Host attribute. The attribute value is expected to the IP
      address to connect the user to, encoded as an <span class="type"><a href="language.types.integer.php" class="type int">int</a></span>,
      which can be set using <span class="function"><a href="function.radius-put-addr.php" class="function">radius_put_addr()</a></span>.
     </p>
    </dd>
   
   
    <dt id="constant.radius-login-service">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-login-service">RADIUS_LOGIN_SERVICE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      The Login-Service attribute. The attribute value is an
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> indicating the service to connect the user to on
      the login host. The value can be converted to a PHP integer via
      <span class="function"><a href="function.radius-cvt-int.php" class="function">radius_cvt_int()</a></span>.
     </p>
    </dd>
   
   
    <dt id="constant.radius-login-tcp-port">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-login-tcp-port">RADIUS_LOGIN_TCP_PORT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      The Login-TCP-Port attribute. The attribute value is an
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> indicating the port to connect the user to on the
      login host. The value can be converted to a PHP integer via
      <span class="function"><a href="function.radius-cvt-int.php" class="function">radius_cvt_int()</a></span>.
     </p>
    </dd>
   
   
    <dt id="constant.radius-reply-message">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-reply-message">RADIUS_REPLY_MESSAGE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      The Reply-Message attribute. The attribute value is a
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span> containing text that may be displayed to the user in
      response to an access request.
     </p>
    </dd>
   
   
    <dt id="constant.radius-callback-number">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-callback-number">RADIUS_CALLBACK_NUMBER</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      The Callback-Number attribute. The attribute value is a
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span> containing the dialing string to use for callback.
     </p>
    </dd>
   
   
    <dt id="constant.radius-callback-id">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-callback-id">RADIUS_CALLBACK_ID</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      The Callback-Id attribute. The attribute value is a <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      containing an implementation-specific name of the place to be called.
     </p>
    </dd>
   
   
    <dt id="constant.radius-framed-route">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-framed-route">RADIUS_FRAMED_ROUTE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      The Framed-Route attribute. The attribute value is a <span class="type"><a href="language.types.string.php" class="type string">string</a></span>
      containing an implementation-specific set of routes to be configured for
      the user.
     </p>
    </dd>
   
   
    <dt id="constant.radius-framed-ipx-network">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-framed-ipx-network">RADIUS_FRAMED_IPX_NETWORK</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      The Framed-IPX-Network attribute. The attribute value is an
      <span class="type"><a href="language.types.integer.php" class="type int">int</a></span> containing the IPX network to be configured for the
      user, or <code class="literal">0xFFFFFFFE</code> to indicate that the RADIUS
      client should select the network, and can be accessed via
      <span class="function"><a href="function.radius-cvt-int.php" class="function">radius_cvt_int()</a></span>.
     </p>
    </dd>
   
   
    <dt id="constant.radius-state">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-state">RADIUS_STATE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      The State attribute. The attribute value is an implementation-defined
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span> included in an Access-Challenge from a server that
      must be included in the subsequent Access-Request, and can be set using
      <span class="function"><a href="function.radius-put-attr.php" class="function">radius_put_attr()</a></span>.
     </p>
    </dd>
   
   
    <dt id="constant.radius-class">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-class">RADIUS_CLASS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      The Class attribute. The attribute value is an arbitrary
      <span class="type"><a href="language.types.string.php" class="type string">string</a></span> included in an Access-Accept message that should
      then be sent to the accounting server in Accounting-Request messages,
      and can be set using <span class="function"><a href="function.radius-put-attr.php" class="function">radius_put_attr()</a></span>.
     </p>
    </dd>
   
   
    <dt id="constant.radius-vendor-specific">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-vendor-specific">RADIUS_VENDOR_SPECIFIC</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      The Vendor-Specific attribute. In general, vendor attribute values
      should be set using <span class="function"><a href="function.radius-put-vendor-addr.php" class="function">radius_put_vendor_addr()</a></span>,
      <span class="function"><a href="function.radius-put-vendor-attr.php" class="function">radius_put_vendor_attr()</a></span>,
      <span class="function"><a href="function.radius-put-vendor-int.php" class="function">radius_put_vendor_int()</a></span> and
      <span class="function"><a href="function.radius-put-vendor-string.php" class="function">radius_put_vendor_string()</a></span>, rather than directly.
     </p>
     <p class="para">
      This constant is mostly useful when interpreting vendor specific
      attributes in responses from a RADIUS server; when a vendor specific
      attribute is received, the <span class="function"><a href="function.radius-get-vendor-attr.php" class="function">radius_get_vendor_attr()</a></span>
      function should be used to access the vendor ID, attribute type and
      attribute value.
     </p>
    </dd>
   
   
    <dt id="constant.radius-session-timeout">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-session-timeout">RADIUS_SESSION_TIMEOUT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Session timeout
     </p>
    </dd>
   
   
    <dt id="constant.radius-idle-timeout">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-idle-timeout">RADIUS_IDLE_TIMEOUT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Idle timeout
     </p>
    </dd>
   
   
    <dt id="constant.radius-termination-action">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-termination-action">RADIUS_TERMINATION_ACTION</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Termination action
     </p>
    </dd>
   
   
    <dt id="constant.radius-called-station-id">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-called-station-id">RADIUS_CALLED_STATION_ID</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Called Station Id
     </p>
    </dd>
   
   
    <dt id="constant.radius-calling-station-id">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-calling-station-id">RADIUS_CALLING_STATION_ID</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Calling Station Id
     </p>
    </dd>
   
   
    <dt id="constant.radius-nas-identifier">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-nas-identifier">RADIUS_NAS_IDENTIFIER</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      NAS ID
     </p>
    </dd>
   
   
    <dt id="constant.radius-proxy-state">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-proxy-state">RADIUS_PROXY_STATE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Proxy State
     </p>
    </dd>
   
   
    <dt id="constant.radius-login-lat-service">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-login-lat-service">RADIUS_LOGIN_LAT_SERVICE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Login LAT Service
     </p>
    </dd>
   
   
    <dt id="constant.radius-login-lat-node">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-login-lat-node">RADIUS_LOGIN_LAT_NODE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Login LAT Node
     </p>
    </dd>
   
   
    <dt id="constant.radius-login-lat-group">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-login-lat-group">RADIUS_LOGIN_LAT_GROUP</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Login LAT Group
     </p>
    </dd>
   
   
    <dt id="constant.radius-framed-appletalk-link">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-framed-appletalk-link">RADIUS_FRAMED_APPLETALK_LINK</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Framed Appletalk Link
     </p>
    </dd>
   
   
    <dt id="constant.radius-framed-appletalk-network">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-framed-appletalk-network">RADIUS_FRAMED_APPLETALK_NETWORK</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Framed Appletalk Network
     </p>
    </dd>
   
   
    <dt id="constant.radius-framed-appletalk-zone">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-framed-appletalk-zone">RADIUS_FRAMED_APPLETALK_ZONE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Framed Appletalk Zone
     </p>
    </dd>
   
   
    <dt id="constant.radius-chap-challenge">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-chap-challenge">RADIUS_CHAP_CHALLENGE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Challenge
     </p>
    </dd>
   
   
    <dt id="constant.radius-nas-port-type">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-nas-port-type">RADIUS_NAS_PORT_TYPE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      NAS port type, one of:
      <ul class="simplelist">
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-async">RADIUS_ASYNC</a></code></strong></li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-sync">RADIUS_SYNC</a></code></strong></li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-isdn-sync">RADIUS_ISDN_SYNC</a></code></strong></li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-isdn-async-v120">RADIUS_ISDN_ASYNC_V120</a></code></strong></li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-isdn-async-v110">RADIUS_ISDN_ASYNC_V110</a></code></strong></li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-virtual">RADIUS_VIRTUAL</a></code></strong></li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-piafs">RADIUS_PIAFS</a></code></strong></li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-hdlc-clear-channel">RADIUS_HDLC_CLEAR_CHANNEL</a></code></strong></li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-x-25">RADIUS_X_25</a></code></strong></li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-x-75">RADIUS_X_75</a></code></strong></li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-g-3-fax">RADIUS_G_3_FAX</a></code></strong></li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-sdsl">RADIUS_SDSL</a></code></strong></li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-adsl-cap">RADIUS_ADSL_CAP</a></code></strong></li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-adsl-dmt">RADIUS_ADSL_DMT</a></code></strong></li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-idsl">RADIUS_IDSL</a></code></strong></li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-ethernet">RADIUS_ETHERNET</a></code></strong></li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-xdsl">RADIUS_XDSL</a></code></strong></li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-cable">RADIUS_CABLE</a></code></strong></li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-wireless-other">RADIUS_WIRELESS_OTHER</a></code></strong></li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-wireless-ieee-802-11">RADIUS_WIRELESS_IEEE_802_11</a></code></strong></li>
      </ul>
     </p>
    </dd>
   
   
    <dt id="constant.radius-port-limit">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-port-limit">RADIUS_PORT_LIMIT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Port Limit
     </p>
    </dd>
   
   
    <dt id="constant.radius-login-lat-port">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-login-lat-port">RADIUS_LOGIN_LAT_PORT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Login LAT Port
     </p>
    </dd>
   
   
    <dt id="constant.radius-connect-info">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-connect-info">RADIUS_CONNECT_INFO</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Connect info
     </p>
    </dd>
   
    
    <dt id="constant.radius-acct-status-type">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-acct-status-type">RADIUS_ACCT_STATUS_TYPE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Accounting status type, one of:
      <ul class="simplelist">
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-start">RADIUS_START</a></code></strong></li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-stop">RADIUS_STOP</a></code></strong></li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-accounting-on">RADIUS_ACCOUNTING_ON</a></code></strong></li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-accounting-off">RADIUS_ACCOUNTING_OFF</a></code></strong></li>
      </ul>
     </p>
    </dd>
   
   
    <dt id="constant.radius-acct-delay-time">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-acct-delay-time">RADIUS_ACCT_DELAY_TIME</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Accounting delay time
     </p>
    </dd>
   
   
    <dt id="constant.radius-acct-input-octets">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-acct-input-octets">RADIUS_ACCT_INPUT_OCTETS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Accounting input bytes
     </p>
    </dd>
   
   
    <dt id="constant.radius-acct-output-octets">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-acct-output-octets">RADIUS_ACCT_OUTPUT_OCTETS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Accounting output bytes
     </p>
    </dd>
   
   
    <dt id="constant.radius-acct-session-id">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-acct-session-id">RADIUS_ACCT_SESSION_ID</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Accounting session ID
     </p>
    </dd>
   
   
    <dt id="constant.radius-acct-authentic">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-acct-authentic">RADIUS_ACCT_AUTHENTIC</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Accounting authentic, one of:
      <ul class="simplelist">
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-auth-radius">RADIUS_AUTH_RADIUS</a></code></strong></li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-auth-local">RADIUS_AUTH_LOCAL</a></code></strong></li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-auth-remote">RADIUS_AUTH_REMOTE</a></code></strong></li>
      </ul>
     </p>
    </dd>
   
   
    <dt id="constant.radius-acct-session-time">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-acct-session-time">RADIUS_ACCT_SESSION_TIME</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Accounting session time
     </p>
    </dd>
   
   
    <dt id="constant.radius-acct-input-packets">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-acct-input-packets">RADIUS_ACCT_INPUT_PACKETS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Accounting input packets
     </p>
    </dd>
   
   
    <dt id="constant.radius-acct-output-packets">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-acct-output-packets">RADIUS_ACCT_OUTPUT_PACKETS</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Accounting output packets
     </p>
    </dd>
   
   
    <dt id="constant.radius-acct-terminate-cause">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-acct-terminate-cause">RADIUS_ACCT_TERMINATE_CAUSE</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Accounting terminate cause, one of:
      <ul class="simplelist">
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-term-user-request">RADIUS_TERM_USER_REQUEST</a></code></strong></li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-term-lost-carrier">RADIUS_TERM_LOST_CARRIER</a></code></strong></li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-term-lost-service">RADIUS_TERM_LOST_SERVICE</a></code></strong></li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-term-idle-timeout">RADIUS_TERM_IDLE_TIMEOUT</a></code></strong></li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-term-session-timeout">RADIUS_TERM_SESSION_TIMEOUT</a></code></strong></li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-term-admin-reset">RADIUS_TERM_ADMIN_RESET</a></code></strong></li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-term-admin-reboot">RADIUS_TERM_ADMIN_REBOOT</a></code></strong></li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-term-port-error">RADIUS_TERM_PORT_ERROR</a></code></strong></li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-term-nas-error">RADIUS_TERM_NAS_ERROR</a></code></strong></li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-term-nas-request">RADIUS_TERM_NAS_REQUEST</a></code></strong></li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-term-nas-reboot">RADIUS_TERM_NAS_REBOOT</a></code></strong></li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-term-port-unneeded">RADIUS_TERM_PORT_UNNEEDED</a></code></strong></li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-term-port-preempted">RADIUS_TERM_PORT_PREEMPTED</a></code></strong></li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-term-port-suspended">RADIUS_TERM_PORT_SUSPENDED</a></code></strong></li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-term-service-unavailable">RADIUS_TERM_SERVICE_UNAVAILABLE</a></code></strong></li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-term-callback">RADIUS_TERM_CALLBACK</a></code></strong></li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-term-user-error">RADIUS_TERM_USER_ERROR</a></code></strong></li>
       <li><strong><code><a href="radius.constants.attributes.php#constant.radius-term-host-request">RADIUS_TERM_HOST_REQUEST</a></code></strong></li>
      </ul>
     </p>
    </dd>
   
   
    <dt id="constant.radius-acct-multi-session-id">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-acct-multi-session-id">RADIUS_ACCT_MULTI_SESSION_ID</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Accounting multi session ID
     </p>
    </dd>
   
   
    <dt id="constant.radius-acct-link-count">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-acct-link-count">RADIUS_ACCT_LINK_COUNT</a></code></strong>
     (<span class="type"><a href="language.types.integer.php" class="type int">int</a></span>)
    </dt>
    <dd>
     <p class="para">
      Accounting link count
     </p>
    </dd>
   
  </dl>
  <dl>
   <strong class="title">Service-Type Constants</strong>
   
    <dt id="constant.radius-login">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-login">RADIUS_LOGIN</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-framed">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-framed">RADIUS_FRAMED</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-callback-login">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-callback-login">RADIUS_CALLBACK_LOGIN</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-callback-framed">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-callback-framed">RADIUS_CALLBACK_FRAMED</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-outbound">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-outbound">RADIUS_OUTBOUND</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-administrative">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-administrative">RADIUS_ADMINISTRATIVE</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-nas-prompt">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-nas-prompt">RADIUS_NAS_PROMPT</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-authenticate-only">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-authenticate-only">RADIUS_AUTHENTICATE_ONLY</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-callback-nas-prompt">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-callback-nas-prompt">RADIUS_CALLBACK_NAS_PROMPT</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
  </dl>

  <dl>
   <strong class="title">Framed-Protocol Constants</strong>
   
    <dt id="constant.radius-ppp">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-ppp">RADIUS_PPP</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-slip">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-slip">RADIUS_SLIP</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-arap">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-arap">RADIUS_ARAP</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-gandalf">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-gandalf">RADIUS_GANDALF</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-xylogics">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-xylogics">RADIUS_XYLOGICS</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
  </dl>

  <dl>
   <strong class="title">Framed-Compression Constants</strong>
   
    <dt id="constant.radius-comp-none">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-comp-none">RADIUS_COMP_NONE</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-comp-vj">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-comp-vj">RADIUS_COMP_VJ</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-comp-ipxhdr">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-comp-ipxhdr">RADIUS_COMP_IPXHDR</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-comp-stac-lzs">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-comp-stac-lzs">RADIUS_COMP_STAC_LZS</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
  </dl>

  <dl>
   <strong class="title">NAS Port Type Constants</strong>
   
    <dt id="constant.radius-async">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-async">RADIUS_ASYNC</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-sync">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-sync">RADIUS_SYNC</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-isdn-sync">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-isdn-sync">RADIUS_ISDN_SYNC</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-isdn-async-v120">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-isdn-async-v120">RADIUS_ISDN_ASYNC_V120</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-isdn-async-v110">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-isdn-async-v110">RADIUS_ISDN_ASYNC_V110</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-virtual">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-virtual">RADIUS_VIRTUAL</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-piafs">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-piafs">RADIUS_PIAFS</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-hdlc-clear-channel">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-hdlc-clear-channel">RADIUS_HDLC_CLEAR_CHANNEL</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-x-25">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-x-25">RADIUS_X_25</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-x-75">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-x-75">RADIUS_X_75</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-g-3-fax">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-g-3-fax">RADIUS_G_3_FAX</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-sdsl">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-sdsl">RADIUS_SDSL</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-adsl-cap">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-adsl-cap">RADIUS_ADSL_CAP</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-adsl-dmt">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-adsl-dmt">RADIUS_ADSL_DMT</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-idsl">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-idsl">RADIUS_IDSL</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-ethernet">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-ethernet">RADIUS_ETHERNET</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-xdsl">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-xdsl">RADIUS_XDSL</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-cable">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-cable">RADIUS_CABLE</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-wireless-other">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-wireless-other">RADIUS_WIRELESS_OTHER</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-wireless-ieee-802-11">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-wireless-ieee-802-11">RADIUS_WIRELESS_IEEE_802_11</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
  </dl>

  <dl>
   <strong class="title">Accounting Status Type Constants</strong>
   
    <dt id="constant.radius-start">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-start">RADIUS_START</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-stop">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-stop">RADIUS_STOP</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-accounting-on">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-accounting-on">RADIUS_ACCOUNTING_ON</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-accounting-off">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-accounting-off">RADIUS_ACCOUNTING_OFF</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
  </dl>

  <dl>
   <strong class="title">Accounting Authentic Constants</strong>
   
    <dt id="constant.radius-auth-radius">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-auth-radius">RADIUS_AUTH_RADIUS</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-auth-local">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-auth-local">RADIUS_AUTH_LOCAL</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-auth-remote">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-auth-remote">RADIUS_AUTH_REMOTE</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
  </dl>

  <dl>
   <strong class="title">Accounting Terminate Cause Constants</strong>
   
    <dt id="constant.radius-term-user-request">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-term-user-request">RADIUS_TERM_USER_REQUEST</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-term-lost-carrier">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-term-lost-carrier">RADIUS_TERM_LOST_CARRIER</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-term-lost-service">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-term-lost-service">RADIUS_TERM_LOST_SERVICE</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-term-idle-timeout">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-term-idle-timeout">RADIUS_TERM_IDLE_TIMEOUT</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-term-session-timeout">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-term-session-timeout">RADIUS_TERM_SESSION_TIMEOUT</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-term-admin-reset">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-term-admin-reset">RADIUS_TERM_ADMIN_RESET</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-term-admin-reboot">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-term-admin-reboot">RADIUS_TERM_ADMIN_REBOOT</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-term-port-error">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-term-port-error">RADIUS_TERM_PORT_ERROR</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-term-nas-error">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-term-nas-error">RADIUS_TERM_NAS_ERROR</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-term-nas-request">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-term-nas-request">RADIUS_TERM_NAS_REQUEST</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-term-nas-reboot">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-term-nas-reboot">RADIUS_TERM_NAS_REBOOT</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-term-port-unneeded">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-term-port-unneeded">RADIUS_TERM_PORT_UNNEEDED</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-term-port-preempted">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-term-port-preempted">RADIUS_TERM_PORT_PREEMPTED</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-term-port-suspended">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-term-port-suspended">RADIUS_TERM_PORT_SUSPENDED</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-term-service-unavailable">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-term-service-unavailable">RADIUS_TERM_SERVICE_UNAVAILABLE</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-term-callback">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-term-callback">RADIUS_TERM_CALLBACK</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-term-user-error">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-term-user-error">RADIUS_TERM_USER_ERROR</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
   
    <dt id="constant.radius-term-host-request">
     <strong><code><a href="radius.constants.attributes.php#constant.radius-term-host-request">RADIUS_TERM_HOST_REQUEST</a></code></strong>
    </dt>
    <dd>
     <span class="simpara">
     </span>
    </dd>
   
  </dl>
 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/radius/constants.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fradius.constants.attributes%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=radius.constants.attributes&amp;repo=en&amp;redirect=https://www.php.net/manual/en/radius.constants.attributes.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">1 note</span></h3>
 </div><div id="allnotes">
  <div class="note" id="118031">  <div class="votes">
    <div id="Vu118031">
    <a href="/manual/vote-note.php?id=118031&amp;page=radius.constants.attributes&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd118031">
    <a href="/manual/vote-note.php?id=118031&amp;page=radius.constants.attributes&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V118031" title="100% like this...">
    3
    </div>
  </div>
  <a href="#118031" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#118031"> &para;</a><div class="date" title="2015-09-21 03:09"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom118031">
<div class="phpcode"><code><span class="html">To fix missing the "Alive" of Acct-Status-Type, just :<br /><br />define('RADIUS_ALIVE', 3);</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=radius.constants.attributes&amp;repo=en&amp;redirect=https://www.php.net/manual/en/radius.constants.attributes.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="radius.constants.php">Predefined Constants</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="radius.constants.options.php" title="RADIUS Options">RADIUS Options</a>
                        </li>
                                                <li class="">
                            <a href="radius.constants.packets.php" title="RADIUS Packet Types">RADIUS Packet Types</a>
                        </li>
                                                <li class="current">
                            <a href="radius.constants.attributes.php" title="RADIUS Attribute Types">RADIUS Attribute Types</a>
                        </li>
                                                <li class="">
                            <a href="radius.constants.vendor-specific.php" title="RADIUS Vendor Specific Attribute Types">RADIUS Vendor Specific Attribute Types</a>
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
