<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: imap_getmailboxes - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.imap-getmailboxes.php">
 <link rel="shorturl" href="https://www.php.net/imap-getmailboxes">
 <link rel="alternate" href="https://www.php.net/imap-getmailboxes" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.imap.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.imap-getacl.php">
 <link rel="next" href="https://www.php.net/manual/en/function.imap-getsubscribed.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.imap-getmailboxes.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.imap-getmailboxes.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.imap-getmailboxes.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.imap-getmailboxes.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.imap-getmailboxes.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.imap-getmailboxes.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.imap-getmailboxes.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.imap-getmailboxes.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.imap-getmailboxes.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.imap-getmailboxes.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.imap-getmailboxes.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Read the list of mailboxes, returning detailed information on each one" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: imap_getmailboxes - Manual" />
<meta name="twitter:description" content="Read the list of mailboxes, returning detailed information on each one" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: imap_getmailboxes - Manual" />
<meta itemprop="description" content="Read the list of mailboxes, returning detailed information on each one" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Read the list of mailboxes, returning detailed information on each one" />

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
        <a href="function.imap-getsubscribed.php">
          imap_getsubscribed &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.imap-getacl.php">
          &laquo; imap_getacl        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.mail.php'>Mail Related Extensions</a></li>      <li><a href='book.imap.php'>IMAP</a></li>      <li><a href='ref.imap.php'>IMAP Functions</a></li>      </ul>
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
            <option value='en/function.imap-getmailboxes.php' selected="selected">English</option>
            <option value='de/function.imap-getmailboxes.php'>German</option>
            <option value='es/function.imap-getmailboxes.php'>Spanish</option>
            <option value='fr/function.imap-getmailboxes.php'>French</option>
            <option value='it/function.imap-getmailboxes.php'>Italian</option>
            <option value='ja/function.imap-getmailboxes.php'>Japanese</option>
            <option value='pt_BR/function.imap-getmailboxes.php'>Brazilian Portuguese</option>
            <option value='ru/function.imap-getmailboxes.php'>Russian</option>
            <option value='tr/function.imap-getmailboxes.php'>Turkish</option>
            <option value='uk/function.imap-getmailboxes.php'>Ukrainian</option>
            <option value='zh/function.imap-getmailboxes.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.imap-getmailboxes" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">imap_getmailboxes</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">imap_getmailboxes</span> &mdash; <span class="dc-title">Read the list of mailboxes, returning detailed information on each one</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.imap-getmailboxes-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>imap_getmailboxes</strong></span>(<span class="methodparam"><span class="type"><a href="class.imap-connection.php" class="type IMAP\Connection">IMAP\Connection</a></span> <code class="parameter">$imap</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$reference</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$pattern</code></span>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Gets information on the mailboxes.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.imap-getmailboxes-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    <dt>
<code class="parameter">imap</code></dt><dd><p class="para">An <span class="classname"><a href="class.imap-connection.php" class="classname">IMAP\Connection</a></span> instance.</p></dd>
    
     <dt><code class="parameter">reference</code></dt>
     <dd>
      <p class="para">
       <code class="parameter">reference</code> should normally be just the server
       specification as described in <span class="function"><a href="function.imap-open.php" class="function">imap_open()</a></span>
      </p>
      <div class="warning"><strong class="warning">Warning</strong><p class="simpara">
Passing untrusted data to this parameter is <em>insecure</em>, unless
<a href="imap.configuration.php#ini.imap.enable-insecure-rsh" class="link">imap.enable_insecure_rsh</a> is disabled.
</p></div>
     </dd>
    
    
     <dt><code class="parameter">pattern</code></dt>
     <dd>
      <p class="para">Specifies where in the mailbox hierarchy
to start searching.</p><p class="para">There are two special characters you can
pass as part of the <code class="parameter">pattern</code>:
&#039;<code class="literal">*</code>&#039; and &#039;<code class="literal">%</code>&#039;.
&#039;<code class="literal">*</code>&#039; means to return all mailboxes. If you pass
<code class="parameter">pattern</code> as &#039;<code class="literal">*</code>&#039;, you will
get a list of the entire mailbox hierarchy.
&#039;<code class="literal">%</code>&#039;
means to return the current level only.
&#039;<code class="literal">%</code>&#039; as the <code class="parameter">pattern</code>
parameter will return only the top level
mailboxes; &#039;<code class="literal">~/mail/%</code>&#039; on <code class="literal">UW_IMAPD</code> will return every mailbox in the <var class="filename">~/mail</var> directory, but none in subfolders of that directory.</p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.imap-getmailboxes-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an array of objects containing mailbox information. Each
   object has the attributes <code class="parameter">name</code>, specifying
   the full name of the mailbox; <code class="parameter">delimiter</code>,
   which is the hierarchy delimiter for the part of the hierarchy
   this mailbox is in; and
   <code class="parameter">attributes</code>. <code class="parameter">Attributes</code>
   is a bitmask that can be tested against:
   <ul class="itemizedlist">
    <li class="listitem">
     <p class="para">
      <strong><code><a href="imap.constants.php#constant.latt-noinferiors">LATT_NOINFERIORS</a></code></strong> - This mailbox not contains, and may not contain any
      &quot;children&quot; (there are no mailboxes below this one). Calling 
      <span class="function"><a href="function.imap-createmailbox.php" class="function">imap_createmailbox()</a></span> will not work on this mailbox.
     </p>
    </li>
   <li class="listitem">
     <p class="para">
      <strong><code><a href="imap.constants.php#constant.latt-noselect">LATT_NOSELECT</a></code></strong> - This is only a container,
      not a mailbox - you cannot open it.
     </p>
    </li>
    <li class="listitem">
     <p class="para">
      <strong><code><a href="imap.constants.php#constant.latt-marked">LATT_MARKED</a></code></strong> - This mailbox is marked. This means that it may 
      contain new messages since the last time it was checked. Not provided by all IMAP
      servers.
     </p>
    </li>
    <li class="listitem">
     <p class="para">
      <strong><code><a href="imap.constants.php#constant.latt-unmarked">LATT_UNMARKED</a></code></strong> - This mailbox is not marked, does not contain new
      messages.  If either <strong><code>MARKED</code></strong> or <strong><code>UNMARKED</code></strong> is
      provided, you can assume the IMAP server  supports this feature for this mailbox.
     </p>
    </li>
    <li class="listitem">
     <p class="para">
      <strong><code><a href="imap.constants.php#constant.latt-referral">LATT_REFERRAL</a></code></strong> - This container has a referral to a remote mailbox.
     </p>
    </li>
    <li class="listitem">
     <p class="para">
      <strong><code><a href="imap.constants.php#constant.latt-haschildren">LATT_HASCHILDREN</a></code></strong> - This mailbox has selectable inferiors.
     </p>
    </li>
    <li class="listitem">
     <p class="para">
      <strong><code><a href="imap.constants.php#constant.latt-hasnochildren">LATT_HASNOCHILDREN</a></code></strong> - This mailbox has no selectable inferiors.
     </p>
    </li>
   </ul>
   The function returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.imap-getmailboxes-changelog">
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
 <td>8.1.0</td>
 <td>
  The <code class="parameter">imap</code> parameter expects an <span class="classname"><a href="class.imap-connection.php" class="classname">IMAP\Connection</a></span>
  instance now; previously, a valid <code class="literal">imap</code> <span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> was expected.
 </td>
</tr>

    </tbody>
   
  </table>

 </div>

 
 <div class="refsect1 examples" id="refsect1-function.imap-getmailboxes-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-3235">
    <p><strong>Example #1 <span class="function"><strong>imap_getmailboxes()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$mbox </span><span style="color: #007700">= </span><span style="color: #0000BB">imap_open</span><span style="color: #007700">(</span><span style="color: #DD0000">"{imap.example.org}"</span><span style="color: #007700">, </span><span style="color: #DD0000">"username"</span><span style="color: #007700">, </span><span style="color: #DD0000">"password"</span><span style="color: #007700">, </span><span style="color: #0000BB">OP_HALFOPEN</span><span style="color: #007700">)<br />      or die(</span><span style="color: #DD0000">"can't connect: " </span><span style="color: #007700">. </span><span style="color: #0000BB">imap_last_error</span><span style="color: #007700">());<br /><br /></span><span style="color: #0000BB">$list </span><span style="color: #007700">= </span><span style="color: #0000BB">imap_getmailboxes</span><span style="color: #007700">(</span><span style="color: #0000BB">$mbox</span><span style="color: #007700">, </span><span style="color: #DD0000">"{imap.example.org}"</span><span style="color: #007700">, </span><span style="color: #DD0000">"*"</span><span style="color: #007700">);<br />if (</span><span style="color: #0000BB">is_array</span><span style="color: #007700">(</span><span style="color: #0000BB">$list</span><span style="color: #007700">)) {<br />    foreach (</span><span style="color: #0000BB">$list </span><span style="color: #007700">as </span><span style="color: #0000BB">$key </span><span style="color: #007700">=&gt; </span><span style="color: #0000BB">$val</span><span style="color: #007700">) {<br />        echo </span><span style="color: #DD0000">"(</span><span style="color: #0000BB">$key</span><span style="color: #DD0000">) "</span><span style="color: #007700">;<br />        echo </span><span style="color: #0000BB">imap_utf7_decode</span><span style="color: #007700">(</span><span style="color: #0000BB">$val</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">name</span><span style="color: #007700">) . </span><span style="color: #DD0000">","</span><span style="color: #007700">;<br />        echo </span><span style="color: #DD0000">"'" </span><span style="color: #007700">. </span><span style="color: #0000BB">$val</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">delimiter </span><span style="color: #007700">. </span><span style="color: #DD0000">"',"</span><span style="color: #007700">;<br />        echo </span><span style="color: #0000BB">$val</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">attributes </span><span style="color: #007700">. </span><span style="color: #DD0000">"&lt;br /&gt;\n"</span><span style="color: #007700">;<br />    }<br />} else {<br />    echo </span><span style="color: #DD0000">"imap_getmailboxes failed: " </span><span style="color: #007700">. </span><span style="color: #0000BB">imap_last_error</span><span style="color: #007700">() . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">imap_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$mbox</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
 </div>

 <div class="refsect1 seealso" id="refsect1-function.imap-getmailboxes-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.imap-getsubscribed.php" class="function" rel="rdfs-seeAlso">imap_getsubscribed()</a> - List all the subscribed mailboxes</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/imap/functions/imap-getmailboxes.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.imap-getmailboxes%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.imap-getmailboxes&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imap-getmailboxes.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="71243">  <div class="votes">
    <div id="Vu71243">
    <a href="/manual/vote-note.php?id=71243&amp;page=function.imap-getmailboxes&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd71243">
    <a href="/manual/vote-note.php?id=71243&amp;page=function.imap-getmailboxes&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V71243" title="84% like this...">
    13
    </div>
  </div>
  <a href="#71243" class="name">
  <strong class="user"><em>Mohamed Abbas mabbas_xyz at yahoo dot com</em></strong></a><a class="genanchor" href="#71243"> &para;</a><div class="date" title="2006-11-18 08:51"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom71243">
<div class="phpcode"><code><span class="html">i am currently develop a simple IMAP client, when i call imap_getmailboxes() i receive a different values in attributes property of the mailbox object the problem is how can i manipulate these attributes to get a meaningful value,<br />if you make a hard search to find a solution for this, you will<br />not find any useful documents for this problem, let us take a closer look for this problem.<br /><br />when i call imap_getmailboxes() against different IMAP servers i got these attribute values<br /><br />[attributes] =&gt; 9<br />[attributes] =&gt; 1<br />[attributes] =&gt; 64<br />[attributes] =&gt; 32<br />[attributes] =&gt; 40 <br /><br />the documentation tell us that we check this attributes against four constants, these contents are<br /><br />LATT_NOINFERIORS <br />LATT_NOSELECT <br />LATT_MARKED<br />LATT_UNMARKED<br /><br />the value of these constants are <br /><br />LATT_NOINFERIORS = 1<br />LATT_NOSELECT = 2<br />LATT_MARKED = 4<br />LATT_UNMARKED = 8<br /><br />you can got this result by echo each constant, unfortunately the documentation not explain how we can check the attributes against the constants, after a long time of searching i find the answer in source code of c-client <br />(you can get the source from <a href="ftp://ftp.cac.washington.edu/imap/" rel="nofollow" target="_blank">ftp://ftp.cac.washington.edu/imap/</a>)<br />under \src\c-client you will find mail.h open it and you will find this<br /><br />                               /* terminal node in hierarchy */<br />#define LATT_NOINFERIORS (long) 0x1<br />                /* name can not be selected */<br />#define LATT_NOSELECT (long) 0x2<br />                /* changed since last accessed */<br />#define LATT_MARKED (long) 0x4<br />                /* accessed since last changed */<br />#define LATT_UNMARKED (long) 0x8<br />                /* name has referral to remote mailbox */<br />#define LATT_REFERRAL (long) 0x10<br />                /* has selectable inferiors */<br />#define LATT_HASCHILDREN (long) 0x20<br />                /* has no selectable inferiors */<br />#define LATT_HASNOCHILDREN (long) 0x40<br /><br />as you notice here these are our four constants and three additional constants <br /><br />LATT_REFERRAL<br />LATT_HASCHILDREN<br />LATT_HASNOCHILDREN<br /><br />then what is the value of these 3 attributes <br />LATT_REFERRAL 0x10 = 00010000 in binary, the bitmask value is 2^4 = 16 and so on, or simply echo this constant to get the value, then<br /><br />LATT_REFERRAL = 16<br />LATT_HASCHILDREN = 32<br />LATT_HASNOCHILDREN = 64<br /><br />finally the full list of constants will be<br />LATT_NOINFERIORS = 1<br />LATT_NOSELECT = 2<br />LATT_MARKED = 4<br />LATT_UNMARKED = 8<br />LATT_REFERRAL = 16<br />LATT_HASCHILDREN = 32<br />LATT_HASNOCHILDREN = 64<br /><br />ok let's back to our attributes <br />[attributes] =&gt; 9<br />[attributes] =&gt; 1<br />[attributes] =&gt; 64<br />[attributes] =&gt; 32<br />[attributes] =&gt; 40 <br /><br />[attributes] =&gt; 9 this mean it's LATT_UNMARKED and LATT_NOINFERIORS 1+8 =9<br /><br />[attributes] =&gt; 1 this mean LATT_NOINFERIORS<br /><br />[attributes] =&gt; 64 this mean LATT_HASNOCHILDREN<br /><br />[attributes] =&gt; 32 this mean LATT_HASCHILDREN <br /><br />[attributes] =&gt; 40 this mean LATT_HASCHILDREN and LATT_UNMARKED 32+8=40<br /><br />this just like linux file permission 7 mean read, write, and execute 4+2+1 read=4 write=2 execute=1<br /><br />that is what i found, i hope this can help <br /><br />Mohamed Abbas<br />Nileweb Egypt</span></code></div>
  </div>
 </div>
  <div class="note" id="15088">  <div class="votes">
    <div id="Vu15088">
    <a href="/manual/vote-note.php?id=15088&amp;page=function.imap-getmailboxes&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd15088">
    <a href="/manual/vote-note.php?id=15088&amp;page=function.imap-getmailboxes&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V15088" title="100% like this...">
    5
    </div>
  </div>
  <a href="#15088" class="name">
  <strong class="user"><em>foom at fuhm dot NO_supercalifragilisticexpialidocious_SPAM dot net</em></strong></a><a class="genanchor" href="#15088"> &para;</a><div class="date" title="2001-08-27 05:42"><strong>24 years ago</strong></div>
  <div class="text" id="Hcom15088">
<div class="phpcode"><code><span class="html">The list of mailbox attributes in this document is very misleading. In particular the explanation of noinferiors is just wrong. It does not mean that the mailbox currently has no children, it means that it *cannot* have children ever. Also, it is untrue that marked and unmarked are only used by UW-IMAP. They are in the official IMAP specification and are used by at least Courier-imap as well.
<br />
<br />One thing to watch out for, however, is broken IMAP servers which do send \Noinferiors when they mean that there are currently no children.
<br />
<br />From the IMAP4rev1 specs (RFC 2060):
<br />      \Noinferiors
<br />
<br />         It is not possible for any child levels of hierarchy to exist
<br />         under this name; no child levels exist now and none can be
<br />         created in the future.
<br />
<br />      \Noselect
<br />
<br />         It is not possible to use this name as a selectable mailbox.
<br />
<br />      \Marked
<br />
<br />         The mailbox has been marked "interesting" by the server; the
<br />         mailbox probably contains messages that have been added since
<br />         the last time the mailbox was selected.
<br />
<br />      \Unmarked
<br />
<br />         The mailbox does not contain any additional messages since the
<br />         last time the mailbox was selected.</span></code></div>
  </div>
 </div>
  <div class="note" id="42135">  <div class="votes">
    <div id="Vu42135">
    <a href="/manual/vote-note.php?id=42135&amp;page=function.imap-getmailboxes&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd42135">
    <a href="/manual/vote-note.php?id=42135&amp;page=function.imap-getmailboxes&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V42135" title="66% like this...">
    1
    </div>
  </div>
  <a href="#42135" class="name">
  <strong class="user"><em>ad-rotator.com</em></strong></a><a class="genanchor" href="#42135"> &para;</a><div class="date" title="2004-05-04 01:17"><strong>21 years ago</strong></div>
  <div class="text" id="Hcom42135">
<div class="phpcode"><code><span class="html">In case you print_r() or var_dump() the object and see an int for attribute, these are the constant integers for the bitmask.<br /><br />1 LATT_NOINFERIORS<br />2 LATT_NOSELECT<br />4 LATT_MARKED<br />8 LATT_UNMARKED</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.imap-getmailboxes&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imap-getmailboxes.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.imap.php">IMAP Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.imap-8bit.php" title="imap_&#8203;8bit">imap_&#8203;8bit</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-alerts.php" title="imap_&#8203;alerts">imap_&#8203;alerts</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-append.php" title="imap_&#8203;append">imap_&#8203;append</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-base64.php" title="imap_&#8203;base64">imap_&#8203;base64</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-binary.php" title="imap_&#8203;binary">imap_&#8203;binary</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-body.php" title="imap_&#8203;body">imap_&#8203;body</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-bodystruct.php" title="imap_&#8203;bodystruct">imap_&#8203;bodystruct</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-check.php" title="imap_&#8203;check">imap_&#8203;check</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-clearflag-full.php" title="imap_&#8203;clearflag_&#8203;full">imap_&#8203;clearflag_&#8203;full</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-close.php" title="imap_&#8203;close">imap_&#8203;close</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-create.php" title="imap_&#8203;create">imap_&#8203;create</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-createmailbox.php" title="imap_&#8203;createmailbox">imap_&#8203;createmailbox</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-delete.php" title="imap_&#8203;delete">imap_&#8203;delete</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-deletemailbox.php" title="imap_&#8203;deletemailbox">imap_&#8203;deletemailbox</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-errors.php" title="imap_&#8203;errors">imap_&#8203;errors</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-expunge.php" title="imap_&#8203;expunge">imap_&#8203;expunge</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-fetch-overview.php" title="imap_&#8203;fetch_&#8203;overview">imap_&#8203;fetch_&#8203;overview</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-fetchbody.php" title="imap_&#8203;fetchbody">imap_&#8203;fetchbody</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-fetchheader.php" title="imap_&#8203;fetchheader">imap_&#8203;fetchheader</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-fetchmime.php" title="imap_&#8203;fetchmime">imap_&#8203;fetchmime</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-fetchstructure.php" title="imap_&#8203;fetchstructure">imap_&#8203;fetchstructure</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-fetchtext.php" title="imap_&#8203;fetchtext">imap_&#8203;fetchtext</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-gc.php" title="imap_&#8203;gc">imap_&#8203;gc</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-get-quota.php" title="imap_&#8203;get_&#8203;quota">imap_&#8203;get_&#8203;quota</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-get-quotaroot.php" title="imap_&#8203;get_&#8203;quotaroot">imap_&#8203;get_&#8203;quotaroot</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-getacl.php" title="imap_&#8203;getacl">imap_&#8203;getacl</a>
                        </li>
                                                <li class="current">
                            <a href="function.imap-getmailboxes.php" title="imap_&#8203;getmailboxes">imap_&#8203;getmailboxes</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-getsubscribed.php" title="imap_&#8203;getsubscribed">imap_&#8203;getsubscribed</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-header.php" title="imap_&#8203;header">imap_&#8203;header</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-headerinfo.php" title="imap_&#8203;headerinfo">imap_&#8203;headerinfo</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-headers.php" title="imap_&#8203;headers">imap_&#8203;headers</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-is-open.php" title="imap_&#8203;is_&#8203;open">imap_&#8203;is_&#8203;open</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-last-error.php" title="imap_&#8203;last_&#8203;error">imap_&#8203;last_&#8203;error</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-list.php" title="imap_&#8203;list">imap_&#8203;list</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-listmailbox.php" title="imap_&#8203;listmailbox">imap_&#8203;listmailbox</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-listscan.php" title="imap_&#8203;listscan">imap_&#8203;listscan</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-listsubscribed.php" title="imap_&#8203;listsubscribed">imap_&#8203;listsubscribed</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-lsub.php" title="imap_&#8203;lsub">imap_&#8203;lsub</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-mail.php" title="imap_&#8203;mail">imap_&#8203;mail</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-mail-compose.php" title="imap_&#8203;mail_&#8203;compose">imap_&#8203;mail_&#8203;compose</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-mail-copy.php" title="imap_&#8203;mail_&#8203;copy">imap_&#8203;mail_&#8203;copy</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-mail-move.php" title="imap_&#8203;mail_&#8203;move">imap_&#8203;mail_&#8203;move</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-mailboxmsginfo.php" title="imap_&#8203;mailboxmsginfo">imap_&#8203;mailboxmsginfo</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-mime-header-decode.php" title="imap_&#8203;mime_&#8203;header_&#8203;decode">imap_&#8203;mime_&#8203;header_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-msgno.php" title="imap_&#8203;msgno">imap_&#8203;msgno</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-mutf7-to-utf8.php" title="imap_&#8203;mutf7_&#8203;to_&#8203;utf8">imap_&#8203;mutf7_&#8203;to_&#8203;utf8</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-num-msg.php" title="imap_&#8203;num_&#8203;msg">imap_&#8203;num_&#8203;msg</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-num-recent.php" title="imap_&#8203;num_&#8203;recent">imap_&#8203;num_&#8203;recent</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-open.php" title="imap_&#8203;open">imap_&#8203;open</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-ping.php" title="imap_&#8203;ping">imap_&#8203;ping</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-qprint.php" title="imap_&#8203;qprint">imap_&#8203;qprint</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-rename.php" title="imap_&#8203;rename">imap_&#8203;rename</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-renamemailbox.php" title="imap_&#8203;renamemailbox">imap_&#8203;renamemailbox</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-reopen.php" title="imap_&#8203;reopen">imap_&#8203;reopen</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-rfc822-parse-adrlist.php" title="imap_&#8203;rfc822_&#8203;parse_&#8203;adrlist">imap_&#8203;rfc822_&#8203;parse_&#8203;adrlist</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-rfc822-parse-headers.php" title="imap_&#8203;rfc822_&#8203;parse_&#8203;headers">imap_&#8203;rfc822_&#8203;parse_&#8203;headers</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-rfc822-write-address.php" title="imap_&#8203;rfc822_&#8203;write_&#8203;address">imap_&#8203;rfc822_&#8203;write_&#8203;address</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-savebody.php" title="imap_&#8203;savebody">imap_&#8203;savebody</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-scan.php" title="imap_&#8203;scan">imap_&#8203;scan</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-scanmailbox.php" title="imap_&#8203;scanmailbox">imap_&#8203;scanmailbox</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-search.php" title="imap_&#8203;search">imap_&#8203;search</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-set-quota.php" title="imap_&#8203;set_&#8203;quota">imap_&#8203;set_&#8203;quota</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-setacl.php" title="imap_&#8203;setacl">imap_&#8203;setacl</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-setflag-full.php" title="imap_&#8203;setflag_&#8203;full">imap_&#8203;setflag_&#8203;full</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-sort.php" title="imap_&#8203;sort">imap_&#8203;sort</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-status.php" title="imap_&#8203;status">imap_&#8203;status</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-subscribe.php" title="imap_&#8203;subscribe">imap_&#8203;subscribe</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-thread.php" title="imap_&#8203;thread">imap_&#8203;thread</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-timeout.php" title="imap_&#8203;timeout">imap_&#8203;timeout</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-uid.php" title="imap_&#8203;uid">imap_&#8203;uid</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-undelete.php" title="imap_&#8203;undelete">imap_&#8203;undelete</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-unsubscribe.php" title="imap_&#8203;unsubscribe">imap_&#8203;unsubscribe</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-utf7-decode.php" title="imap_&#8203;utf7_&#8203;decode">imap_&#8203;utf7_&#8203;decode</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-utf7-encode.php" title="imap_&#8203;utf7_&#8203;encode">imap_&#8203;utf7_&#8203;encode</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-utf8.php" title="imap_&#8203;utf8">imap_&#8203;utf8</a>
                        </li>
                                                <li class="">
                            <a href="function.imap-utf8-to-mutf7.php" title="imap_&#8203;utf8_&#8203;to_&#8203;mutf7">imap_&#8203;utf8_&#8203;to_&#8203;mutf7</a>
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
