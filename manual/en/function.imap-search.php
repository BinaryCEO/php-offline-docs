<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: imap_search - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.imap-search.php">
 <link rel="shorturl" href="https://www.php.net/imap-search">
 <link rel="alternate" href="https://www.php.net/imap-search" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.imap.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.imap-scanmailbox.php">
 <link rel="next" href="https://www.php.net/manual/en/function.imap-set-quota.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.imap-search.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.imap-search.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.imap-search.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.imap-search.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.imap-search.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.imap-search.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.imap-search.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.imap-search.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.imap-search.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.imap-search.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.imap-search.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="This function returns an array of messages matching the given search criteria" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: imap_search - Manual" />
<meta name="twitter:description" content="This function returns an array of messages matching the given search criteria" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: imap_search - Manual" />
<meta itemprop="description" content="This function returns an array of messages matching the given search criteria" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="This function returns an array of messages matching the given search criteria" />

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
        <a href="function.imap-set-quota.php">
          imap_set_quota &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.imap-scanmailbox.php">
          &laquo; imap_scanmailbox        </a>
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
            <option value='en/function.imap-search.php' selected="selected">English</option>
            <option value='de/function.imap-search.php'>German</option>
            <option value='es/function.imap-search.php'>Spanish</option>
            <option value='fr/function.imap-search.php'>French</option>
            <option value='it/function.imap-search.php'>Italian</option>
            <option value='ja/function.imap-search.php'>Japanese</option>
            <option value='pt_BR/function.imap-search.php'>Brazilian Portuguese</option>
            <option value='ru/function.imap-search.php'>Russian</option>
            <option value='tr/function.imap-search.php'>Turkish</option>
            <option value='uk/function.imap-search.php'>Ukrainian</option>
            <option value='zh/function.imap-search.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.imap-search" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">imap_search</h1>
  <p class="verinfo">(PHP 4, PHP 5, PHP 7, PHP 8)</p><p class="refpurpose"><span class="refname">imap_search</span> &mdash; <span class="dc-title">This function returns an array of messages matching the given search criteria</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.imap-search-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>imap_search</strong></span>(<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="class.imap-connection.php" class="type IMAP\Connection">IMAP\Connection</a></span> <code class="parameter">$imap</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$criteria</code></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.integer.php" class="type int">int</a></span> <code class="parameter">$flags</code><span class="initializer"> = <strong><code><a href="imap.constants.php#constant.se-free">SE_FREE</a></code></strong></span></span>,<br>&nbsp;&nbsp;&nbsp;&nbsp;<span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$charset</code><span class="initializer"> = &quot;&quot;</span></span><br>): <span class="type"><span class="type"><a href="language.types.array.php" class="type array">array</a></span>|<span class="type"><a href="language.types.singleton.php" class="type false">false</a></span></span></div>

  <p class="para rdfs-comment">
   This function performs a search on the mailbox currently opened
   in the given <abbr title="Internet Message Access Protocol">IMAP</abbr> stream. 
  </p>
  <p class="para">
   For example, to match all unanswered messages sent by Mom, you&#039;d
   use: &quot;UNANSWERED FROM mom&quot;. Searches appear to be case
   insensitive. This list of criteria is from a reading of the UW
   c-client source code and may be incomplete or
   inaccurate (see also <a href="https://datatracker.ietf.org/doc/html/rfc1176" class="link external">&raquo;&nbsp;RFC1176</a>, 
   section &quot;tag SEARCH search_criteria&quot;).
  </p>
 </div>

 <div class="refsect1 parameters" id="refsect1-function.imap-search-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    <dt>
<code class="parameter">imap</code></dt><dd><p class="para">An <span class="classname"><a href="class.imap-connection.php" class="classname">IMAP\Connection</a></span> instance.</p></dd>
    
     <dt><code class="parameter">criteria</code></dt>
     <dd>
      <p class="para">
       A string, delimited by spaces, in which the following keywords are
       allowed. Any multi-word arguments (e.g.
       <code class="literal">FROM &quot;joey smith&quot;</code>) must be quoted. Results will match
       all <code class="parameter">criteria</code> entries.
       <ul class="itemizedlist">
        <li class="listitem">
         <span class="simpara">
          ALL - return all messages matching the rest of the criteria
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          ANSWERED - match messages with the \\ANSWERED flag set
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          BCC &quot;string&quot; - match messages with &quot;string&quot; in the Bcc: field
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          BEFORE &quot;date&quot; - match messages with Date: before &quot;date&quot;
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          BODY &quot;string&quot; - match messages with &quot;string&quot; in the body of the message
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          CC &quot;string&quot; - match messages with &quot;string&quot; in the Cc: field
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          DELETED - match deleted messages
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          FLAGGED - match messages with the \\FLAGGED (sometimes
          referred to as Important or Urgent) flag set
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          FROM &quot;string&quot; - match messages with &quot;string&quot; in the From: field
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          KEYWORD &quot;string&quot; - match messages with &quot;string&quot; as a keyword
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          NEW - match new messages
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          OLD - match old messages
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          ON &quot;date&quot; - match messages with Date: matching &quot;date&quot;
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          RECENT - match messages with the \\RECENT flag set
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          SEEN - match messages that have been read (the \\SEEN flag is set)
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          SINCE &quot;date&quot; - match messages with Date: after &quot;date&quot;
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          SUBJECT &quot;string&quot; - match messages with &quot;string&quot; in the Subject:
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          TEXT &quot;string&quot; - match messages with text &quot;string&quot;
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          TO &quot;string&quot; - match messages with &quot;string&quot; in the To:
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          UNANSWERED - match messages that have not been answered
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          UNDELETED - match messages that are not deleted
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          UNFLAGGED - match messages that are not flagged
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          UNKEYWORD &quot;string&quot; - match messages that do not have the
          keyword &quot;string&quot;
         </span>
        </li>
        <li class="listitem">
         <span class="simpara">
          UNSEEN - match messages which have not been read yet
         </span>
        </li>
       </ul>
      </p>
     </dd>
    
    
     <dt><code class="parameter">flags</code></dt>
     <dd>
      <p class="para">
       Valid values for <code class="parameter">flags</code> are 
       <strong><code><a href="imap.constants.php#constant.se-uid">SE_UID</a></code></strong>, which causes the returned array to
       contain UIDs instead of messages sequence numbers.
      </p>
     </dd>
    
    
     <dt><code class="parameter">charset</code></dt>
     <dd>
      <p class="para">
       MIME character set to use when searching strings.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>

 <div class="refsect1 returnvalues" id="refsect1-function.imap-search-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns an array of message numbers or UIDs.
  </p>
  <p class="para">
   Return <strong><code><a href="reserved.constants.php#constant.false">false</a></code></strong> if it does not understand the search
   <code class="parameter">criteria</code> or no messages have been found.
  </p>
 </div>


 <div class="refsect1 changelog" id="refsect1-function.imap-search-changelog">
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


 <div class="refsect1 examples" id="refsect1-function.imap-search-examples">
  <h3 class="title">Examples</h3>
  <div class="example" id="imap-search.examples">
   <p><strong>Example #1 <span class="function"><strong>imap_search()</strong></span> example</strong></p>
   <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$imap   </span><span style="color: #007700">= </span><span style="color: #0000BB">imap_open</span><span style="color: #007700">(</span><span style="color: #DD0000">'{imap.example.com:993/imap/ssl}INBOX'</span><span style="color: #007700">, </span><span style="color: #DD0000">'foo@example.com'</span><span style="color: #007700">, </span><span style="color: #DD0000">'pass123'</span><span style="color: #007700">, </span><span style="color: #0000BB">OP_READONLY</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">$some   </span><span style="color: #007700">= </span><span style="color: #0000BB">imap_search</span><span style="color: #007700">(</span><span style="color: #0000BB">$imap</span><span style="color: #007700">, </span><span style="color: #DD0000">'SUBJECT "HOWTO be Awesome" SINCE "8 August 2008"'</span><span style="color: #007700">, </span><span style="color: #0000BB">SE_UID</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$msgnos </span><span style="color: #007700">= </span><span style="color: #0000BB">imap_search</span><span style="color: #007700">(</span><span style="color: #0000BB">$imap</span><span style="color: #007700">, </span><span style="color: #DD0000">'ALL'</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">$uids   </span><span style="color: #007700">= </span><span style="color: #0000BB">imap_search</span><span style="color: #007700">(</span><span style="color: #0000BB">$imap</span><span style="color: #007700">, </span><span style="color: #DD0000">'ALL'</span><span style="color: #007700">, </span><span style="color: #0000BB">SE_UID</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$some</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$msgnos</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">print_r</span><span style="color: #007700">(</span><span style="color: #0000BB">$uids</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

   <div class="example-contents"><p>The above example will output
something similar to:</p></div>
   <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Array
(
    [0] =&gt; 4
    [1] =&gt; 6
    [2] =&gt; 11
)
Array
(
    [0] =&gt; 1
    [1] =&gt; 2
    [2] =&gt; 3
    [3] =&gt; 4
    [4] =&gt; 5
    [5] =&gt; 6
)
Array
(
    [0] =&gt; 1
    [1] =&gt; 4
    [2] =&gt; 6
    [3] =&gt; 8
    [4] =&gt; 11
    [5] =&gt; 12
)</pre>
</div>
   </div>
  </div>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.imap-search-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.imap-listscan.php" class="function" rel="rdfs-seeAlso">imap_listscan()</a> - Returns the list of mailboxes that matches the given text</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/imap/functions/imap-search.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.imap-search%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.imap-search&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imap-search.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">8 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="109496">  <div class="votes">
    <div id="Vu109496">
    <a href="/manual/vote-note.php?id=109496&amp;page=function.imap-search&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109496">
    <a href="/manual/vote-note.php?id=109496&amp;page=function.imap-search&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109496" title="72% like this...">
    35
    </div>
  </div>
  <a href="#109496" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#109496"> &para;</a><div class="date" title="2012-07-22 07:34"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109496">
<div class="phpcode"><code><span class="html">The date format for e.g. SINCE is, according to rfc3501:<br /><br />date            = date-text / DQUOTE date-text DQUOTE<br /><br />date-day        = 1*2DIGIT<br />                    ; Day of month<br /><br />date-day-fixed  = (SP DIGIT) / 2DIGIT<br />                    ; Fixed-format version of date-day<br /><br />date-month      = "Jan" / "Feb" / "Mar" / "Apr" / "May" / "Jun" /<br />                  "Jul" / "Aug" / "Sep" / "Oct" / "Nov" / "Dec"<br /><br />date-text       = date-day "-" date-month "-" date-year<br /><br />So a valid date is e.g. "22-Jul-2012" with or without the double quotes.</span></code></div>
  </div>
 </div>
  <div class="note" id="126758">  <div class="votes">
    <div id="Vu126758">
    <a href="/manual/vote-note.php?id=126758&amp;page=function.imap-search&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126758">
    <a href="/manual/vote-note.php?id=126758&amp;page=function.imap-search&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126758" title="100% like this...">
    5
    </div>
  </div>
  <a href="#126758" class="name">
  <strong class="user"><em>Steve</em></strong></a><a class="genanchor" href="#126758"> &para;</a><div class="date" title="2022-01-12 12:07"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom126758">
<div class="phpcode"><code><span class="html">It has been noted that imap_search breaks with imap4 syntax.  To do an imap 4 search use curl and send a custom command, then grab the results.  Its best to do a UID search to get the unique IDs to work with later.  Here's an example with a working curl function.<br /><br /><span class="default">&lt;?php<br />$host </span><span class="keyword">= </span><span class="string">'your-server.tld'</span><span class="keyword">;<br /></span><span class="default">$user </span><span class="keyword">= </span><span class="string">'username'</span><span class="keyword">;<br /></span><span class="default">$pass </span><span class="keyword">= </span><span class="string">'password'</span><span class="keyword">;<br /></span><span class="default">$folder </span><span class="keyword">= </span><span class="string">'INBOX'</span><span class="keyword">;<br /><br />function </span><span class="default">send_imap_command</span><span class="keyword">(</span><span class="default">$server</span><span class="keyword">, </span><span class="default">$user</span><span class="keyword">, </span><span class="default">$pass</span><span class="keyword">, </span><span class="default">$command</span><span class="keyword">, </span><span class="default">$folder</span><span class="keyword">=</span><span class="string">"INBOX"</span><span class="keyword">)<br />{   </span><span class="comment">//Send an imap command directly to the imap server<br /><br />    </span><span class="default">$result</span><span class="keyword">=[</span><span class="string">"response"</span><span class="keyword">=&gt;</span><span class="string">""</span><span class="keyword">, </span><span class="string">"error"</span><span class="keyword">=&gt;</span><span class="string">""</span><span class="keyword">];<br />    </span><span class="default">$url </span><span class="keyword">= </span><span class="string">"imaps://</span><span class="default">$server</span><span class="string">/"</span><span class="keyword">. </span><span class="default">rawurlencode</span><span class="keyword">(</span><span class="default">$folder</span><span class="keyword">);<br />    </span><span class="default">$options</span><span class="keyword">=[</span><span class="default">CURLOPT_URL</span><span class="keyword">=&gt;</span><span class="default">$url</span><span class="keyword">, </span><span class="default">CURLOPT_PORT</span><span class="keyword">=&gt; </span><span class="default">993</span><span class="keyword">, </span><span class="default">CURLOPT_USERNAME</span><span class="keyword">=&gt; </span><span class="default">$user</span><span class="keyword">,<br />        </span><span class="default">CURLOPT_PASSWORD</span><span class="keyword">=&gt; </span><span class="default">$pass</span><span class="keyword">, </span><span class="default">CURLOPT_RETURNTRANSFER</span><span class="keyword">=&gt; </span><span class="default">true</span><span class="keyword">, </span><span class="default">CURLOPT_HEADER</span><span class="keyword">=&gt; </span><span class="default">true</span><span class="keyword">,<br />        </span><span class="default">CURLOPT_CUSTOMREQUEST</span><span class="keyword">=&gt; </span><span class="default">$command</span><span class="keyword">];<br />    </span><span class="default">$ch </span><span class="keyword">= </span><span class="default">curl_init</span><span class="keyword">();<br />    </span><span class="default">curl_setopt_array</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">, </span><span class="default">$options</span><span class="keyword">);<br /><br />    </span><span class="default">$result</span><span class="keyword">[</span><span class="string">"response"</span><span class="keyword">] = </span><span class="default">curl_exec</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">);<br />    if(</span><span class="default">curl_errno</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">)) </span><span class="default">$response</span><span class="keyword">[</span><span class="string">"error"</span><span class="keyword">]=</span><span class="string">"Error ("</span><span class="keyword">. </span><span class="default">curl_errno</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">) .</span><span class="string">"): "</span><span class="keyword">. </span><span class="default">curl_error</span><span class="keyword">(</span><span class="default">$ch</span><span class="keyword">);<br /><br />    return </span><span class="default">$result</span><span class="keyword">;<br />}<br /><br /></span><span class="comment">//Pull out all the emails returned as undeliverable by the remote mail server in the inbox using curl<br /></span><span class="default">$response</span><span class="keyword">=</span><span class="default">send_imap_command</span><span class="keyword">(</span><span class="default">$host</span><span class="keyword">, </span><span class="default">$user</span><span class="keyword">, </span><span class="default">$pass</span><span class="keyword">,<br />            </span><span class="string">'UID SEARCH SINCE "01-Jan-2022" (OR FROM "mailer-daemon" FROM "postmaster") (OR SUBJECT "fail" (OR SUBJECT "undeliver" SUBJECT "returned"))'</span><span class="keyword">,<br />            </span><span class="default">$folder</span><span class="keyword">);<br /><br />if(</span><span class="default">$response</span><span class="keyword">[</span><span class="string">"error"</span><span class="keyword">]!=</span><span class="string">""</span><span class="keyword">)<br />{<br />    echo </span><span class="default">$response</span><span class="keyword">[</span><span class="string">"error"</span><span class="keyword">].</span><span class="string">"\n"</span><span class="keyword">;<br />} elseif (</span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$response</span><span class="keyword">[</span><span class="string">"response"</span><span class="keyword">])&gt;</span><span class="default">5</span><span class="keyword">){<br />    </span><span class="comment">//Server returns a string in the form * SEARCH uid1 uid2 uid3 ...  Clean up and create array of UIDs.<br />    </span><span class="default">$response</span><span class="keyword">[</span><span class="string">"response"</span><span class="keyword">]=</span><span class="default">str_replace</span><span class="keyword">(</span><span class="string">"* SEARCH "</span><span class="keyword">,</span><span class="string">""</span><span class="keyword">,</span><span class="default">$response</span><span class="keyword">[</span><span class="string">"response"</span><span class="keyword">]);<br />    </span><span class="default">$messages</span><span class="keyword">=</span><span class="default">explode</span><span class="keyword">(</span><span class="string">" "</span><span class="keyword">,</span><span class="default">$response</span><span class="keyword">[</span><span class="string">"response"</span><span class="keyword">]);<br />}<br /><br /></span><span class="default">print_r</span><span class="keyword">(</span><span class="default">$messages</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="114392">  <div class="votes">
    <div id="Vu114392">
    <a href="/manual/vote-note.php?id=114392&amp;page=function.imap-search&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd114392">
    <a href="/manual/vote-note.php?id=114392&amp;page=function.imap-search&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V114392" title="66% like this...">
    13
    </div>
  </div>
  <a href="#114392" class="name">
  <strong class="user"><em>mail at nikha dot org</em></strong></a><a class="genanchor" href="#114392"> &para;</a><div class="date" title="2014-02-14 10:18"><strong>11 years ago</strong></div>
  <div class="text" id="Hcom114392">
<div class="phpcode"><code><span class="html">Hi, <br />be aware, that imap_search() does NOT (as you may exspect) return an empty array, if nothing was found! <br />As the manual says, it returns FALSE.<br /><br />Do not test the result like "count($array)" as I did. <br />This gives you 1 for an empty result. Took me an hour to found out why :-(  RTFM</span></code></div>
  </div>
 </div>
  <div class="note" id="119148">  <div class="votes">
    <div id="Vu119148">
    <a href="/manual/vote-note.php?id=119148&amp;page=function.imap-search&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119148">
    <a href="/manual/vote-note.php?id=119148&amp;page=function.imap-search&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119148" title="59% like this...">
    4
    </div>
  </div>
  <a href="#119148" class="name">
  <strong class="user"><em>britty dot it at hotmail dot com</em></strong></a><a class="genanchor" href="#119148"> &para;</a><div class="date" title="2016-04-11 11:10"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119148">
<div class="phpcode"><code><span class="html">imap_search function is not fully compatible with IMAP4. the c-client used as of now supports only IMAP2 and some search criterion will not be available for use such as "OR"<br /><br />So a php code similar to:<br />$inbox   = imap_open('{imap.example.com:993/imap/ssl}INBOX', 'foo@example.com', 'pass123', OP_READONLY);<br />$search_string = 'SUBJECT "FedEx" OR SUBJECT "USPS"';    <br />$emails = imap_search($inbox, $search_string);<br /><br />will throw an error saying "Unknown search criterion"<br /><br />observations and reference:<br /><br />PHP source trace:(ref: <a href="https://github.com/php/php-src/blob/master/ext/imap/php_imap.c" rel="nofollow" target="_blank">https://github.com/php/php-src/blob/master/ext/imap/php_imap.c</a>)<br />    /ext/imap/php_imap.c -&gt; line no : 4126<br />    imap_search =&gt; line no : 4148<br /><br />c-client library source trace:<br />src/c-client/mail.c -&gt; line no : 3973<br /><br />internal.txt -&gt; line no : 1919 =&gt; mail_criteria()<br />    criteria IMAP2-format search criteria string<br />    WARNING: This function does not accept IMAP4 search criteria.<br /><br />IMAP2 RFC1064 =&gt; [ref: <a href="https://tools.ietf.org/html/rfc1064]" rel="nofollow" target="_blank">https://tools.ietf.org/html/rfc1064]</a> [page: 13]<br />IMAP4 RFC2060 =&gt; [ref: <a href="http://www.faqs.org/rfcs/rfc2060.html]" rel="nofollow" target="_blank">http://www.faqs.org/rfcs/rfc2060.html]</a> [section: 6.4.4]<br /><br />Note:<br />The core search functionality in a core module(IMAP) is still not available in PHP. Hope this will be brought to the developer community's attention...</span></code></div>
  </div>
 </div>
  <div class="note" id="109998">  <div class="votes">
    <div id="Vu109998">
    <a href="/manual/vote-note.php?id=109998&amp;page=function.imap-search&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109998">
    <a href="/manual/vote-note.php?id=109998&amp;page=function.imap-search&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109998" title="57% like this...">
    5
    </div>
  </div>
  <a href="#109998" class="name">
  <strong class="user"><em>james at medbirdie dot com</em></strong></a><a class="genanchor" href="#109998"> &para;</a><div class="date" title="2012-09-10 07:31"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109998">
<div class="phpcode"><code><span class="html">To set your own CHARSET, which is useful if you are dealing with Chinese Japanese and Korean queries.
<br />
<br /><span class="default">&lt;?php imap_search</span><span class="keyword">(</span><span class="default">$inbox</span><span class="keyword">,</span><span class="string">'BODY "'</span><span class="keyword">.</span><span class="default">$keyword</span><span class="keyword">.</span><span class="string">'"'</span><span class="keyword">, </span><span class="default">SE_FREE</span><span class="keyword">, </span><span class="string">"UTF-8"</span><span class="keyword">); </span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="125482">  <div class="votes">
    <div id="Vu125482">
    <a href="/manual/vote-note.php?id=125482&amp;page=function.imap-search&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125482">
    <a href="/manual/vote-note.php?id=125482&amp;page=function.imap-search&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125482" title="55% like this...">
    1
    </div>
  </div>
  <a href="#125482" class="name">
  <strong class="user"><em>Enriqe</em></strong></a><a class="genanchor" href="#125482"> &para;</a><div class="date" title="2020-11-02 05:36"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125482">
<div class="phpcode"><code><span class="html">Please be aware about UID of the message.<br />It is NOT an ID that never change!<br /><br />If you move your message to another folder in your IMAP account, this UID WILL CHANGE. <br /><br />So if your message has UID = 100 (in INBOX folder) and you move it to some subfolder and then back to INBOX, it's new UID in INBOX will be 101.</span></code></div>
  </div>
 </div>
  <div class="note" id="119758">  <div class="votes">
    <div id="Vu119758">
    <a href="/manual/vote-note.php?id=119758&amp;page=function.imap-search&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119758">
    <a href="/manual/vote-note.php?id=119758&amp;page=function.imap-search&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119758" title="52% like this...">
    1
    </div>
  </div>
  <a href="#119758" class="name">
  <strong class="user"><em>Paula</em></strong></a><a class="genanchor" href="#119758"> &para;</a><div class="date" title="2016-08-18 09:44"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119758">
<div class="phpcode"><code><span class="html">This is the correct way to use the imap_search with ON "date"<br /><br />$date = date("j F Y");<br /><br />$emails = imap_search($inbox,'ON "'.$date.'"' );</span></code></div>
  </div>
 </div>
  <div class="note" id="108064">  <div class="votes">
    <div id="Vu108064">
    <a href="/manual/vote-note.php?id=108064&amp;page=function.imap-search&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd108064">
    <a href="/manual/vote-note.php?id=108064&amp;page=function.imap-search&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V108064" title="53% like this...">
    1
    </div>
  </div>
  <a href="#108064" class="name">
  <strong class="user"><em>joseph dot cardwell at jbcwebservices dot com</em></strong></a><a class="genanchor" href="#108064"> &para;</a><div class="date" title="2012-03-26 05:07"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom108064">
<div class="phpcode"><code><span class="html">imap_search() always returns false when op_silent flag is set in the connection parameters.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.imap-search&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.imap-search.php">＋<small>add a note</small></a></div>
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
                                                <li class="current">
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
