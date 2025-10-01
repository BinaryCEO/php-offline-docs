<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: imap_check - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.imap-check.php">
 <link rel="shorturl" href="https://www.php.net/imap-check">
 <link rel="alternate" href="https://www.php.net/imap-check" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.imap.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.imap-bodystruct.php">
 <link rel="next" href="https://www.php.net/manual/en/function.imap-clearflag-full.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.imap-check.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.imap-check.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.imap-check.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.imap-check.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.imap-check.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.imap-check.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.imap-check.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.imap-check.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.imap-check.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.imap-check.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.imap-check.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Check current mailbox" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: imap_check - Manual" />
<meta name="twitter:description" content="Check current mailbox" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: imap_check - Manual" />
<meta itemprop="description" content="Check current mailbox" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Check current mailbox" />

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
        <a href="function.imap-clearflag-full.php">
          imap_clearflag_full &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.imap-bodystruct.php">
          &laquo; imap_bodystruct        </a>
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
            <option value='en/function.imap-check.php' selected="selected">English</option>
            <option value='de/function.imap-check.php'>German</option>
            <option value='es/function.imap-check.php'>Spanish</option>
            <option value='fr/function.imap-check.php'>French</option>
            <option value='it/function.imap-check.php'>Italian</option>
            <option value='ja/function.imap-check.php'>Japanese</option>
            <option value='pt_BR/function.imap-check.php'>Brazilian Portuguese</option>
            <option value='ru/function.imap-check.php'>Russian</option>
            <option value='tr/function.imap-check.php'>Turkish</option>
            <option value='uk/function.imap-check.php'>Ukrainian</option>
            <option value='zh/function.imap-check.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.imap-check" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">imap_check</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">imap_check</span> &mdash; <span class="dc-title">Check current mailbox</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.imap-check-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>imap_check</strong></span>(<span class="methodparam"><span class="type"><a href="class.imap-connection.php" class="type IMAP\Connection">IMAP\Connection</a></span> <code class="parameter">$imap</code></span>): <span class="type"><span class="type"><a href="class.stdclass.php" class="type stdClass">stdClass</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   Checks information about the current mailbox.
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.imap-check-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    <dt>
<code class="parameter">imap</code></dt><dd><p class="para">An <span class="classname"><a href="class.imap-connection.php" class="classname">IMAP\Connection</a></span> instance.</p></dd>
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.imap-check-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns the information in an object with following properties:
   <ul class="itemizedlist">
    <li class="listitem">
     <span class="simpara">
      <strong><code>Date</code></strong> - current system time formatted according to <a href="https://datatracker.ietf.org/doc/html/rfc2822" class="link external">&raquo;&nbsp;RFC2822</a>
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      <strong><code>Driver</code></strong> - protocol used to access this mailbox:
      <abbr title="Post Office Protocol version 3">POP3</abbr>, <abbr title="Internet Message Access Protocol">IMAP</abbr>, <abbr title="Network News Transfer Protocol">NNTP</abbr>
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      <strong><code>Mailbox</code></strong> - the mailbox name
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      <strong><code>Nmsgs</code></strong> - number of messages in the mailbox
     </span>
    </li>
    <li class="listitem">
     <span class="simpara">
      <strong><code>Recent</code></strong> - number of recent messages in the mailbox
     </span>
    </li>
   </ul>
  </p>
  <p class="para">
   Returns <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> on failure.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.imap-check-changelog">
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

 
 <div class="refsect1 examples" id="refsect1-function.imap-check-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-3226">
    <p><strong>Example #1 <span class="function"><strong>imap_check()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$imap </span><span style="color: #007700">= </span><span style="color: #0000BB">imap_check</span><span style="color: #007700">(</span><span style="color: #0000BB">$imap_stream</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$imap</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">object(stdClass)(5) {
  [&quot;Date&quot;]=&gt;
  string(37) &quot;Wed, 10 Dec 2003 17:56:54 +0100 (CET)&quot;
  [&quot;Driver&quot;]=&gt;
  string(4) &quot;imap&quot;
  [&quot;Mailbox&quot;]=&gt;
  string(54)
  &quot;{www.example.com:143/imap/user=&quot;foo@example.com&quot;}INBOX&quot;
  [&quot;Nmsgs&quot;]=&gt;
  int(1)
  [&quot;Recent&quot;]=&gt;
  int(0)
}</pre>
</div>
    </div>
   </div>
  </p>
 </div>

</div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/imap/functions/imap-check.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.imap-check%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.imap-check&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imap-check.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes </h3>
 </div>
 <div class="note">There are no user contributed notes for this page.</div></section>    </section><!-- layout-content -->
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
                                                <li class="current">
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
                                                <li class="">
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
