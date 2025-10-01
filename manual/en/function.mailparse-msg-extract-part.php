<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: mailparse_msg_extract_part - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.mailparse-msg-extract-part.php">
 <link rel="shorturl" href="https://www.php.net/mailparse-msg-extract-part">
 <link rel="alternate" href="https://www.php.net/mailparse-msg-extract-part" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.mailparse.php">
 <link rel="prev" href="https://www.php.net/manual/en/function.mailparse-msg-create.php">
 <link rel="next" href="https://www.php.net/manual/en/function.mailparse-msg-extract-part-file.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.mailparse-msg-extract-part.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.mailparse-msg-extract-part.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.mailparse-msg-extract-part.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.mailparse-msg-extract-part.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.mailparse-msg-extract-part.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.mailparse-msg-extract-part.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.mailparse-msg-extract-part.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.mailparse-msg-extract-part.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.mailparse-msg-extract-part.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.mailparse-msg-extract-part.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.mailparse-msg-extract-part.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Extracts/decodes a message section" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: mailparse_msg_extract_part - Manual" />
<meta name="twitter:description" content="Extracts/decodes a message section" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: mailparse_msg_extract_part - Manual" />
<meta itemprop="description" content="Extracts/decodes a message section" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Extracts/decodes a message section" />

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
        <a href="function.mailparse-msg-extract-part-file.php">
          mailparse_msg_extract_part_file &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="function.mailparse-msg-create.php">
          &laquo; mailparse_msg_create        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.remote.mail.php'>Mail Related Extensions</a></li>      <li><a href='book.mailparse.php'>Mailparse</a></li>      <li><a href='ref.mailparse.php'>Mailparse Functions</a></li>      </ul>
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
            <option value='en/function.mailparse-msg-extract-part.php' selected="selected">English</option>
            <option value='de/function.mailparse-msg-extract-part.php'>German</option>
            <option value='es/function.mailparse-msg-extract-part.php'>Spanish</option>
            <option value='fr/function.mailparse-msg-extract-part.php'>French</option>
            <option value='it/function.mailparse-msg-extract-part.php'>Italian</option>
            <option value='ja/function.mailparse-msg-extract-part.php'>Japanese</option>
            <option value='pt_BR/function.mailparse-msg-extract-part.php'>Brazilian Portuguese</option>
            <option value='ru/function.mailparse-msg-extract-part.php'>Russian</option>
            <option value='tr/function.mailparse-msg-extract-part.php'>Turkish</option>
            <option value='uk/function.mailparse-msg-extract-part.php'>Ukrainian</option>
            <option value='zh/function.mailparse-msg-extract-part.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.mailparse-msg-extract-part" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">mailparse_msg_extract_part</h1>
  <p class="verinfo">(PECL mailparse &gt;= 0.9.0)</p><p class="refpurpose"><span class="refname">mailparse_msg_extract_part</span> &mdash; <span class="dc-title">
   Extracts/decodes a message section
  </span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.mailparse-msg-extract-part-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>mailparse_msg_extract_part</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> <code class="parameter">$mimemail</code></span>, <span class="methodparam"><span class="type"><a href="language.types.string.php" class="type string">string</a></span> <code class="parameter">$msgbody</code></span>, <span class="methodparam"><span class="type"><a href="language.types.callable.php" class="type callable">callable</a></span> <code class="parameter">$callbackfunc</code><span class="initializer"> = ?</span></span>): <span class="type"><a href="language.types.void.php" class="type void">void</a></span></div>

  <div class="warning"><strong class="warning">Warning</strong><p class="simpara">This function is
currently not documented; only its argument list is available.
</p></div>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.mailparse-msg-extract-part-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">mimemail</code></dt>
     <dd>
      <p class="para">
       A valid <code class="literal">MIME</code> resource.
      </p>
     </dd>
    
    
     <dt><code class="parameter">msgbody</code></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
    
     <dt><code class="parameter">callbackfunc</code></dt>
     <dd>
      <p class="para">
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.mailparse-msg-extract-part-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   No value is returned.
  </p>
 </div>


 <div class="refsect1 seealso" id="refsect1-function.mailparse-msg-extract-part-seealso">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><span class="function"><a href="function.mailparse-msg-extract-part-file.php" class="function" rel="rdfs-seeAlso">mailparse_msg_extract_part_file()</a> - Extracts/decodes a message section</span></li>
    <li><span class="function"><a href="function.mailparse-msg-extract-whole-part-file.php" class="function" rel="rdfs-seeAlso">mailparse_msg_extract_whole_part_file()</a> - Extracts a message section including headers without decoding the transfer encoding</span></li>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/mailparse/functions/mailparse-msg-extract-part.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.mailparse-msg-extract-part%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.mailparse-msg-extract-part&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.mailparse-msg-extract-part.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">6 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="125715">  <div class="votes">
    <div id="Vu125715">
    <a href="/manual/vote-note.php?id=125715&amp;page=function.mailparse-msg-extract-part&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125715">
    <a href="/manual/vote-note.php?id=125715&amp;page=function.mailparse-msg-extract-part&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125715" title="100% like this...">
    5
    </div>
  </div>
  <a href="#125715" class="name">
  <strong class="user"><em>Sbastien</em></strong></a><a class="genanchor" href="#125715"> &para;</a><div class="date" title="2021-01-23 11:21"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125715">
<div class="phpcode"><code><span class="html">Here a full example to save ZIP files attachments in their original name.<br /><br /><span class="default">&lt;?php<br />$email_raw </span><span class="keyword">= </span><span class="string">'(raw e-mail contents buffer)'</span><span class="keyword">;<br /></span><span class="default">$parser </span><span class="keyword">= </span><span class="default">mailparse_msg_create</span><span class="keyword">(); </span><span class="comment">// MUST be destroyed at the end of the script<br /></span><span class="default">mailparse_msg_parse</span><span class="keyword">(</span><span class="default">$parser</span><span class="keyword">, </span><span class="default">$email_raw</span><span class="keyword">);<br /></span><span class="default">$structure </span><span class="keyword">= </span><span class="default">mailparse_msg_get_structure</span><span class="keyword">(</span><span class="default">$parser</span><span class="keyword">); </span><span class="comment">// Ex. ["1", "1.1", "1.2"]<br /></span><span class="keyword">foreach (</span><span class="default">$structure </span><span class="keyword">as </span><span class="default">$part_label</span><span class="keyword">) { </span><span class="comment">// Search among each e-mail part<br />    </span><span class="default">$part </span><span class="keyword">= </span><span class="default">mailparse_msg_get_part</span><span class="keyword">(</span><span class="default">$parser</span><span class="keyword">, </span><span class="default">$part_label</span><span class="keyword">); </span><span class="comment">// Parse a specified part<br />    </span><span class="default">$part_data </span><span class="keyword">= </span><span class="default">mailparse_msg_get_part_data</span><span class="keyword">(</span><span class="default">$part</span><span class="keyword">); </span><span class="comment">// Get parsed part data, header and meta values<br />    </span><span class="keyword">if (</span><span class="default">$part_data</span><span class="keyword">[</span><span class="string">'content-type'</span><span class="keyword">] ?? </span><span class="default">null </span><span class="keyword">=== </span><span class="string">'application/zip'</span><span class="keyword">) {<br />        </span><span class="default">$name </span><span class="keyword">= </span><span class="default">$part_data</span><span class="keyword">[</span><span class="string">'disposition-filename'</span><span class="keyword">] ?? </span><span class="default">$part_data</span><span class="keyword">[</span><span class="string">'content-name'</span><span class="keyword">] ?? </span><span class="string">'unknow.zip'</span><span class="keyword">;<br />        </span><span class="default">$contents </span><span class="keyword">= </span><span class="default">mailparse_msg_extract_part</span><span class="keyword">(</span><span class="default">$part</span><span class="keyword">, </span><span class="default">$email_raw</span><span class="keyword">, </span><span class="default">null</span><span class="keyword">); </span><span class="comment">// null for returning content<br />        </span><span class="default">file_put_contents</span><span class="keyword">(</span><span class="default">$name</span><span class="keyword">, </span><span class="default">$contents</span><span class="keyword">);<br />    }<br />}<br /></span><span class="default">mailparse_msg_free</span><span class="keyword">(</span><span class="default">$parser</span><span class="keyword">); </span><span class="comment">// Important</span></span></code></div>
  </div>
 </div>
  <div class="note" id="80353">  <div class="votes">
    <div id="Vu80353">
    <a href="/manual/vote-note.php?id=80353&amp;page=function.mailparse-msg-extract-part&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd80353">
    <a href="/manual/vote-note.php?id=80353&amp;page=function.mailparse-msg-extract-part&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V80353" title="50% like this...">
    0
    </div>
  </div>
  <a href="#80353" class="name">
  <strong class="user"><em>marlinf {at} datashaman {dot} com</em></strong></a><a class="genanchor" href="#80353"> &para;</a><div class="date" title="2008-01-11 02:13"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom80353">
<div class="phpcode"><code><span class="html">With ref to previous comment re: callback:<br /><br />If you explicitly specify NULL as the callback parameter, the complete section is extracted, decoded and returned, without the need for a callback.</span></code></div>
  </div>
 </div>
  <div class="note" id="72135">  <div class="votes">
    <div id="Vu72135">
    <a href="/manual/vote-note.php?id=72135&amp;page=function.mailparse-msg-extract-part&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd72135">
    <a href="/manual/vote-note.php?id=72135&amp;page=function.mailparse-msg-extract-part&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V72135" title="no votes...">
    0
    </div>
  </div>
  <a href="#72135" class="name">
  <strong class="user"><em>Will</em></strong></a><a class="genanchor" href="#72135"> &para;</a><div class="date" title="2007-01-04 12:12"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom72135">
<div class="phpcode"><code><span class="html">In mailparse version 2.1.1 (and perhaps earlier), when using mailparse_msg_extract_part() with a callback function, it breaks the data it passes to it into 4kB chunks and calls the callback function for each chunk.  So, for example, if it's extracting a 41kB MIME part, the callback function you define will be called 11 times, each time with the next chunk of data.  Here's some quick-and-dirty code that shows one way to handle this:<br /><br /><span class="default">&lt;?php<br />    $message </span><span class="keyword">= </span><span class="default">file_get_contents </span><span class="keyword">(</span><span class="string">"email.txt"</span><span class="keyword">); </span><span class="comment">// Pull in the e-mail.<br /><br />    </span><span class="keyword">function </span><span class="default">catch_part </span><span class="keyword">(</span><span class="default">$part</span><span class="keyword">)<br />    {<br />        </span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">"part_data"</span><span class="keyword">] .= </span><span class="default">$part</span><span class="keyword">; </span><span class="comment">// Append the data onto any previously extracted data.<br />    </span><span class="keyword">}<br /><br />    </span><span class="default">mailparse_msg_extract_part </span><span class="keyword">(</span><span class="string">"1.1"</span><span class="keyword">, </span><span class="default">$message</span><span class="keyword">, </span><span class="string">"catch_part"</span><span class="keyword">); </span><span class="comment">// Extract MIME part 1.1<br />    </span><span class="keyword">echo </span><span class="default">$GLOBALS</span><span class="keyword">[</span><span class="string">"part_data"</span><span class="keyword">]; </span><span class="comment">// Print out the extracted part.<br /></span><span class="default">?&gt;<br /></span><br />There's probably a much better way of dealing with this, but hey.  It's what I got.</span></code></div>
  </div>
 </div>
  <div class="note" id="67309">  <div class="votes">
    <div id="Vu67309">
    <a href="/manual/vote-note.php?id=67309&amp;page=function.mailparse-msg-extract-part&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd67309">
    <a href="/manual/vote-note.php?id=67309&amp;page=function.mailparse-msg-extract-part&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V67309" title="50% like this...">
    0
    </div>
  </div>
  <a href="#67309" class="name">
  <strong class="user"><em>php at cdauth dot de</em></strong></a><a class="genanchor" href="#67309"> &para;</a><div class="date" title="2006-06-07 12:01"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom67309">
<div class="phpcode"><code><span class="html">substr() uses the string length, not the position as third argument. The corrected version of the following code line:<br /><span class="default">&lt;?php<br />$parts</span><span class="keyword">[</span><span class="default">$s</span><span class="keyword">] = </span><span class="default">substr</span><span class="keyword">(</span><span class="default">$file_txt</span><span class="keyword">, </span><span class="default">$starting_pos_body</span><span class="keyword">, </span><span class="default">$ending_pos_body</span><span class="keyword">-</span><span class="default">$starting_pos_body</span><span class="keyword">);<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="123823">  <div class="votes">
    <div id="Vu123823">
    <a href="/manual/vote-note.php?id=123823&amp;page=function.mailparse-msg-extract-part&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123823">
    <a href="/manual/vote-note.php?id=123823&amp;page=function.mailparse-msg-extract-part&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123823" title="33% like this...">
    -1
    </div>
  </div>
  <a href="#123823" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#123823"> &para;</a><div class="date" title="2019-05-06 07:55"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123823">
<div class="phpcode"><code><span class="html">The callback argument does not support closures... :( It will complains with "PHP Catchable fatal error:  Object of class Closure could not be converted to string".</span></code></div>
  </div>
 </div>
  <div class="note" id="64063">  <div class="votes">
    <div id="Vu64063">
    <a href="/manual/vote-note.php?id=64063&amp;page=function.mailparse-msg-extract-part&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd64063">
    <a href="/manual/vote-note.php?id=64063&amp;page=function.mailparse-msg-extract-part&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V64063" title="28% like this...">
    -3
    </div>
  </div>
  <a href="#64063" class="name">
  <strong class="user"><em>steve at tequilasolutions dot com</em></strong></a><a class="genanchor" href="#64063"> &para;</a><div class="date" title="2006-04-06 10:36"><strong>19 years ago</strong></div>
  <div class="text" id="Hcom64063">
<div class="phpcode"><code><span class="html">Unless I've missed something obvious:<br /><br />get_structure returns array(1,1.1,1.1.2) etc but its not easy to get the contents of each part as mailparse_msg_extract_part() and mailparse_msg_extract_part_file() just return the lot.  However get_part_data will return the string offsets so you know where to chop the message so you can get the contents of the parts.<br /><br />Only issue is get_part_data returns:<br />    [starting-pos] =&gt; 0<br />    [starting-pos-body] =&gt; 1412<br />    [ending-pos] =&gt; 14989<br />    [ending-pos-body] =&gt; 14989<br /><br />Unless I'm missed something else, theres a bug here as ending-pos is the same as ending-pos-body so it won't chop the contents cleanly, leaving the:<br /><br />------=_NextPart_000_0069_01C659A6.9072E590--<br /><br />...as supposedly part of the section contents.<br /><br />$file = "..../mail"; // path of your mail<br />$file_txt = implode("",file($file));<br />$parse = mailparse_msg_parse_file($file); <br />$structure = mailparse_msg_get_structure($parse);<br />// chop message parts into array<br />$parts = array();<br />foreach ($structure as $s){<br />    print "Part $s\n";<br />    print "--------------------------------------\n";<br />    $part = mailparse_msg_get_part($parse, $s);<br />    $part_data = mailparse_msg_get_part_data($part);<br />    print_r($part_data);<br />    $starting_pos_body = $part_data['starting-pos-body'];<br />    $ending_pos_body    = $part_data['ending-pos-body'];<br />    $parts[$s] = substr($file_txt,$starting_pos_body,$ending_pos_body); // copy data into array<br />    print "[".$parts[$s]."]";<br />    print "\n------------------------------------\n";<br />}</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.mailparse-msg-extract-part&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.mailparse-msg-extract-part.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.mailparse.php">Mailparse Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="function.mailparse-determine-best-xfer-encoding.php" title="mailparse_&#8203;determine_&#8203;best_&#8203;xfer_&#8203;encoding">mailparse_&#8203;determine_&#8203;best_&#8203;xfer_&#8203;encoding</a>
                        </li>
                                                <li class="">
                            <a href="function.mailparse-msg-create.php" title="mailparse_&#8203;msg_&#8203;create">mailparse_&#8203;msg_&#8203;create</a>
                        </li>
                                                <li class="current">
                            <a href="function.mailparse-msg-extract-part.php" title="mailparse_&#8203;msg_&#8203;extract_&#8203;part">mailparse_&#8203;msg_&#8203;extract_&#8203;part</a>
                        </li>
                                                <li class="">
                            <a href="function.mailparse-msg-extract-part-file.php" title="mailparse_&#8203;msg_&#8203;extract_&#8203;part_&#8203;file">mailparse_&#8203;msg_&#8203;extract_&#8203;part_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.mailparse-msg-extract-whole-part-file.php" title="mailparse_&#8203;msg_&#8203;extract_&#8203;whole_&#8203;part_&#8203;file">mailparse_&#8203;msg_&#8203;extract_&#8203;whole_&#8203;part_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.mailparse-msg-free.php" title="mailparse_&#8203;msg_&#8203;free">mailparse_&#8203;msg_&#8203;free</a>
                        </li>
                                                <li class="">
                            <a href="function.mailparse-msg-get-part.php" title="mailparse_&#8203;msg_&#8203;get_&#8203;part">mailparse_&#8203;msg_&#8203;get_&#8203;part</a>
                        </li>
                                                <li class="">
                            <a href="function.mailparse-msg-get-part-data.php" title="mailparse_&#8203;msg_&#8203;get_&#8203;part_&#8203;data">mailparse_&#8203;msg_&#8203;get_&#8203;part_&#8203;data</a>
                        </li>
                                                <li class="">
                            <a href="function.mailparse-msg-get-structure.php" title="mailparse_&#8203;msg_&#8203;get_&#8203;structure">mailparse_&#8203;msg_&#8203;get_&#8203;structure</a>
                        </li>
                                                <li class="">
                            <a href="function.mailparse-msg-parse.php" title="mailparse_&#8203;msg_&#8203;parse">mailparse_&#8203;msg_&#8203;parse</a>
                        </li>
                                                <li class="">
                            <a href="function.mailparse-msg-parse-file.php" title="mailparse_&#8203;msg_&#8203;parse_&#8203;file">mailparse_&#8203;msg_&#8203;parse_&#8203;file</a>
                        </li>
                                                <li class="">
                            <a href="function.mailparse-rfc822-parse-addresses.php" title="mailparse_&#8203;rfc822_&#8203;parse_&#8203;addresses">mailparse_&#8203;rfc822_&#8203;parse_&#8203;addresses</a>
                        </li>
                                                <li class="">
                            <a href="function.mailparse-stream-encode.php" title="mailparse_&#8203;stream_&#8203;encode">mailparse_&#8203;stream_&#8203;encode</a>
                        </li>
                                                <li class="">
                            <a href="function.mailparse-uudecode-all.php" title="mailparse_&#8203;uudecode_&#8203;all">mailparse_&#8203;uudecode_&#8203;all</a>
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
