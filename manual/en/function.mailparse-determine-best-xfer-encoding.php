<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: mailparse_determine_best_xfer_encoding - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/function.mailparse-determine-best-xfer-encoding.php">
 <link rel="shorturl" href="https://www.php.net/mailparse-determine-best-xfer-encoding">
 <link rel="alternate" href="https://www.php.net/mailparse-determine-best-xfer-encoding" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/ref.mailparse.php">
 <link rel="prev" href="https://www.php.net/manual/en/ref.mailparse.php">
 <link rel="next" href="https://www.php.net/manual/en/function.mailparse-msg-create.php">

 <link rel="alternate" href="https://www.php.net/manual/en/function.mailparse-determine-best-xfer-encoding.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/function.mailparse-determine-best-xfer-encoding.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/function.mailparse-determine-best-xfer-encoding.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/function.mailparse-determine-best-xfer-encoding.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/function.mailparse-determine-best-xfer-encoding.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/function.mailparse-determine-best-xfer-encoding.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/function.mailparse-determine-best-xfer-encoding.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/function.mailparse-determine-best-xfer-encoding.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/function.mailparse-determine-best-xfer-encoding.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/function.mailparse-determine-best-xfer-encoding.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/function.mailparse-determine-best-xfer-encoding.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Gets the best way of encoding" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: mailparse_determine_best_xfer_encoding - Manual" />
<meta name="twitter:description" content="Gets the best way of encoding" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: mailparse_determine_best_xfer_encoding - Manual" />
<meta itemprop="description" content="Gets the best way of encoding" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Gets the best way of encoding" />

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
        <a href="function.mailparse-msg-create.php">
          mailparse_msg_create &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="ref.mailparse.php">
          &laquo; Mailparse Functions        </a>
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
            <option value='en/function.mailparse-determine-best-xfer-encoding.php' selected="selected">English</option>
            <option value='de/function.mailparse-determine-best-xfer-encoding.php'>German</option>
            <option value='es/function.mailparse-determine-best-xfer-encoding.php'>Spanish</option>
            <option value='fr/function.mailparse-determine-best-xfer-encoding.php'>French</option>
            <option value='it/function.mailparse-determine-best-xfer-encoding.php'>Italian</option>
            <option value='ja/function.mailparse-determine-best-xfer-encoding.php'>Japanese</option>
            <option value='pt_BR/function.mailparse-determine-best-xfer-encoding.php'>Brazilian Portuguese</option>
            <option value='ru/function.mailparse-determine-best-xfer-encoding.php'>Russian</option>
            <option value='tr/function.mailparse-determine-best-xfer-encoding.php'>Turkish</option>
            <option value='uk/function.mailparse-determine-best-xfer-encoding.php'>Ukrainian</option>
            <option value='zh/function.mailparse-determine-best-xfer-encoding.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="function.mailparse-determine-best-xfer-encoding" class="refentry">
 <div class="refnamediv">
  <h1 class="refname">mailparse_determine_best_xfer_encoding</h1>
  <p class="verinfo">(PECL mailparse &gt;= 0.9.0)</p><p class="refpurpose"><span class="refname">mailparse_determine_best_xfer_encoding</span> &mdash; <span class="dc-title">Gets the best way of encoding</span></p>

 </div>
 <div class="refsect1 description" id="refsect1-function.mailparse-determine-best-xfer-encoding-description">
  <h3 class="title">Description</h3>
  <div class="methodsynopsis dc-description">
   <span class="methodname"><strong>mailparse_determine_best_xfer_encoding</strong></span>(<span class="methodparam"><span class="type"><a href="language.types.resource.php" class="type resource">resource</a></span> <code class="parameter">$fp</code></span>): <span class="type"><a href="language.types.string.php" class="type string">string</a></span></div>

  <p class="para rdfs-comment">
   Figures out the best way of encoding the content read from the given file
   pointer.
  </p>
 </div>


 <div class="refsect1 parameters" id="refsect1-function.mailparse-determine-best-xfer-encoding-parameters">
  <h3 class="title">Parameters</h3>
  <p class="para">
   <dl>
    
     <dt><code class="parameter">fp</code></dt>
     <dd>
      <p class="para">
       A valid file pointer, which must be seek-able.
      </p>
     </dd>
    
   </dl>
  </p>
 </div>


 <div class="refsect1 returnvalues" id="refsect1-function.mailparse-determine-best-xfer-encoding-returnvalues">
  <h3 class="title">Return Values</h3>
  <p class="para">
   Returns one of the character encodings supported by the
   <a href="ref.mbstring.php" class="link">mbstring</a> module.
  </p>
 </div>



 <div class="refsect1 examples" id="refsect1-function.mailparse-determine-best-xfer-encoding-examples">
  <h3 class="title">Examples</h3>
  <p class="para">
   <div class="example" id="example-3260">
    <p><strong>Example #1 <span class="function"><strong>mailparse_determine_best_xfer_encoding()</strong></span> example</strong></p>
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /><br />$fp </span><span style="color: #007700">= </span><span style="color: #0000BB">fopen</span><span style="color: #007700">(</span><span style="color: #DD0000">'somemail.eml'</span><span style="color: #007700">, </span><span style="color: #DD0000">'r'</span><span style="color: #007700">);<br />echo </span><span style="color: #DD0000">'Best encoding: ' </span><span style="color: #007700">. </span><span style="color: #0000BB">mailparse_determine_best_xfer_encoding</span><span style="color: #007700">(</span><span style="color: #0000BB">$fp</span><span style="color: #007700">);<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output
something similar to:</p></div>
    <div class="example-contents screen">
<div class="examplescode"><pre class="examplescode">Best encoding: 7bit</pre>
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
        <a href="https://github.com/php/doc-en/blob/master/reference/mailparse/functions/mailparse-determine-best-xfer-encoding.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Ffunction.mailparse-determine-best-xfer-encoding%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=function.mailparse-determine-best-xfer-encoding&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.mailparse-determine-best-xfer-encoding.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">5 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="125912">  <div class="votes">
    <div id="Vu125912">
    <a href="/manual/vote-note.php?id=125912&amp;page=function.mailparse-determine-best-xfer-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125912">
    <a href="/manual/vote-note.php?id=125912&amp;page=function.mailparse-determine-best-xfer-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125912" title="33% like this...">
    -2
    </div>
  </div>
  <a href="#125912" class="name">
  <strong class="user"><em>ramoncin at hotmail dot com</em></strong></a><a class="genanchor" href="#125912"> &para;</a><div class="date" title="2021-03-11 05:10"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125912">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br />session_start</span><span class="keyword">();<br /></span><span class="default">?&gt;<br />&lt;?php<br />$conexion</span><span class="keyword">=</span><span class="default">mysqli_connect</span><span class="keyword">(</span><span class="string">'192.168.2.201'</span><span class="keyword">,</span><span class="string">'proba'</span><span class="keyword">,</span><span class="string">'abc123.'</span><span class="keyword">,</span><span class="string">'senderismo'</span><span class="keyword">) or die (</span><span class="default">mysqli_error</span><span class="keyword">(</span><span class="default">$conexion</span><span class="keyword">));<br />if (</span><span class="default">$conexion</span><span class="keyword">) {<br />    if (isset(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'c'</span><span class="keyword">])) {<br />        </span><span class="default">$datos</span><span class="keyword">=</span><span class="default">mysqli_query</span><span class="keyword">(</span><span class="default">$conexion</span><span class="keyword">,</span><span class="string">"SELECT * FROM material"</span><span class="keyword">);<br />    }<br />    if (isset(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'m'</span><span class="keyword">])) {<br />        </span><span class="default">$datos</span><span class="keyword">=</span><span class="default">mysqli_query</span><span class="keyword">(</span><span class="default">$conexion</span><span class="keyword">,</span><span class="string">"SELECT * FROM material ORDER BY Marca"</span><span class="keyword">);<br />    }<br />    if (isset(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'p'</span><span class="keyword">])) {<br />        </span><span class="default">$datos</span><span class="keyword">=</span><span class="default">mysqli_query</span><span class="keyword">(</span><span class="default">$conexion</span><span class="keyword">,</span><span class="string">"SELECT * FROM material ORDER BY Prezo"</span><span class="keyword">);<br />    }<br />    if (isset(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'e'</span><span class="keyword">])) {<br />        if (isset(</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'T'</span><span class="keyword">]){<br />            </span><span class="default">$type</span><span class="keyword">=</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'T'</span><span class="keyword">]<br />            </span><span class="default">$datos</span><span class="keyword">=</span><span class="default">mysqli_query</span><span class="keyword">(</span><span class="default">$conexion</span><span class="keyword">,</span><span class="string">"SELECT * FROM material where Tipo like '</span><span class="default">$type</span><span class="string">$"</span><span class="keyword">);<br />        }<br />    }<br />if (</span><span class="default">$datos </span><span class="keyword">!= </span><span class="default">FALSE</span><span class="keyword">) {<br />    while (</span><span class="default">$fila</span><span class="keyword">=</span><span class="default">mysqli_fetch_array</span><span class="keyword">(</span><span class="default">$datos</span><span class="keyword">)) {<br />        </span><span class="default">$srcImaxe</span><span class="keyword">=</span><span class="default">$fila</span><span class="keyword">[</span><span class="string">'Imaxe'</span><span class="keyword">].</span><span class="string">".jpg"</span><span class="keyword">;<br />        echo </span><span class="string">"&lt;div class='produto'&gt;&lt;img src='imaxes/</span><span class="default">$srcImaxe</span><span class="string">'&gt;&lt;br&gt;"</span><span class="keyword">,</span><span class="default">$fila</span><span class="keyword">[</span><span class="string">'Nome'</span><span class="keyword">],</span><span class="string">"&lt;br&gt;"</span><span class="keyword">,<br /></span><span class="default">$fila</span><span class="keyword">[</span><span class="string">'Marca'</span><span class="keyword">],</span><span class="string">"&lt;br&gt;"</span><span class="keyword">,</span><span class="default">$fila</span><span class="keyword">[</span><span class="string">'Tipo'</span><span class="keyword">],</span><span class="string">"&lt;br&gt;"</span><span class="keyword">,</span><span class="default">$fila</span><span class="keyword">[</span><span class="string">'Prezo'</span><span class="keyword">],</span><span class="string">"€&lt;br&gt;&lt;/div&gt;"</span><span class="keyword">;<br />        }<br />    }<br />    echo </span><span class="string">"&lt;form action='ver.php' method='GET'<br />        &lt;input type='submit' name='volta' value='Vovler atrás'&lt;br&gt;<br />        &lt;/form&gt;"</span><span class="keyword">;<br />}<br />else{<br />    echo </span><span class="string">"Mal;"<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="125910">  <div class="votes">
    <div id="Vu125910">
    <a href="/manual/vote-note.php?id=125910&amp;page=function.mailparse-determine-best-xfer-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125910">
    <a href="/manual/vote-note.php?id=125910&amp;page=function.mailparse-determine-best-xfer-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125910" title="25% like this...">
    -2
    </div>
  </div>
  <a href="#125910" class="name">
  <strong class="user"><em>intro at gmail dot com</em></strong></a><a class="genanchor" href="#125910"> &para;</a><div class="date" title="2021-03-11 05:05"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125910">
<div class="phpcode"><code><span class="html">&lt;!DOCTYPE html&gt;<br />&lt;html&gt;<br />&lt;head&gt;<br />    &lt;title&gt;&lt;/title&gt;<br />&lt;/head&gt;<br />&lt;body&gt;<br />&lt;form action="ver.php" method="GET"&gt;<br />    &lt;p&gt;Introduzca un Usuario:&lt;/p&gt;<br />    &lt;input type="text" name="usu"&gt;&lt;br&gt;<br />    &lt;p&gt;Introduzca un Contrasinal:&lt;/p&gt;<br />    &lt;input type="password" name="con"&gt;&lt;br&gt;<br />    &lt;input type="submit" name="Enviar"&gt;<br />&lt;/form&gt;<br />&lt;/body&gt;<br />&lt;/html&gt;</span></code></div>
  </div>
 </div>
  <div class="note" id="125911">  <div class="votes">
    <div id="Vu125911">
    <a href="/manual/vote-note.php?id=125911&amp;page=function.mailparse-determine-best-xfer-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd125911">
    <a href="/manual/vote-note.php?id=125911&amp;page=function.mailparse-determine-best-xfer-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V125911" title="0% like this...">
    -3
    </div>
  </div>
  <a href="#125911" class="name">
  <strong class="user"><em>ver at gmail dot com</em></strong></a><a class="genanchor" href="#125911"> &para;</a><div class="date" title="2021-03-11 05:07"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom125911">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br />session_start</span><span class="keyword">();<br /></span><span class="default">?&gt;<br />&lt;?php<br />$conexion</span><span class="keyword">=</span><span class="default">mysqli_connect</span><span class="keyword">(</span><span class="string">'192.168.2.201'</span><span class="keyword">,</span><span class="string">'proba'</span><span class="keyword">,</span><span class="string">'abc123.'</span><span class="keyword">,</span><span class="string">'senderismo'</span><span class="keyword">) or die (</span><span class="default">mysqli_error</span><span class="keyword">(</span><span class="default">$conexion</span><span class="keyword">));<br />if (</span><span class="default">$conexion</span><span class="keyword">) {<br />    </span><span class="default">$usu1</span><span class="keyword">=</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'usu'</span><span class="keyword">];<br />    </span><span class="default">$con1</span><span class="keyword">=</span><span class="default">$_GET</span><span class="keyword">[</span><span class="string">'con'</span><span class="keyword">];<br />}<br />if ((</span><span class="default">strcmp</span><span class="keyword">(</span><span class="default">$usu1</span><span class="keyword">, </span><span class="string">"Eva"</span><span class="keyword">)==</span><span class="default">0 </span><span class="keyword">|| </span><span class="default">strcmp</span><span class="keyword">(</span><span class="default">$usu1</span><span class="keyword">, </span><span class="string">"Xan"</span><span class="keyword">)==</span><span class="default">0</span><span class="keyword">)&amp;&amp; </span><span class="default">strcmp</span><span class="keyword">(</span><span class="default">$con1</span><span class="keyword">, </span><span class="string">"abc123."</span><span class="keyword">)==</span><span class="default">0 </span><span class="keyword">){<br />    </span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'usu'</span><span class="keyword">]=</span><span class="default">$usu1</span><span class="keyword">;<br />    </span><span class="default">$_SESSION</span><span class="keyword">[</span><span class="string">'con'</span><span class="keyword">]=</span><span class="default">$con1</span><span class="keyword">;<br />    echo </span><span class="string">"Benvido: "</span><span class="keyword">, </span><span class="default">$usu1</span><span class="keyword">;<br /><br />    echo </span><span class="string">"&lt;form action='lista.php' method='GET'&gt;<br />    &lt;input type='submit' name='c' value='Listado Completo'&gt;&lt;br&gt;<br />    &lt;input type='submit' name='m' value='Listado por Marca'&gt;&lt;br&gt;<br />    &lt;input type='submit' name='p' value='Listado por prezo'&gt;&lt;br&gt;<br />    &lt;select name='T'&gt;<br />        &lt;option name='Calcetin'&gt;Calcetin&lt;/option&gt;<br />        &lt;option name='Pantalon'&gt;Pantalon&lt;/option&gt;<br />        &lt;option name='Bota'&gt;Bota&lt;/option&gt;<br />        &lt;option name='Chaqueta'&gt;Chaqueta&lt;/option&gt;<br />        &lt;option name='Zapatilla'&gt;Zapatilla&lt;/option&gt;<br />            &lt;/select&gt;<br />        &lt;input type='submit' name='e' value='Enviar'&gt;&lt;br&gt;<br />    &lt;/form&gt;"</span><span class="keyword">;<br /><br />    if (</span><span class="default">strcmp</span><span class="keyword">(</span><span class="default">$usu1</span><span class="keyword">, </span><span class="string">"Eva"</span><span class="keyword">)==</span><span class="default">0</span><span class="keyword">{<br />        echo </span><span class="string">"&lt;input type='button' name='c' value='Engadir Rexistro'&gt;&lt;br&gt;<br />        &lt;input type='button' name='m' value='Editar Rexistro'&gt;&lt;br&gt;<br />        &lt;input type='button' name='p' value='Eliminar Rexistro'&gt;&lt;br&gt;"</span><span class="keyword">;<br />    }<br />}<br />else {<br />    echo </span><span class="string">"Non se puido conectar a BBDD"</span><span class="keyword">;<br />}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="106586">  <div class="votes">
    <div id="Vu106586">
    <a href="/manual/vote-note.php?id=106586&amp;page=function.mailparse-determine-best-xfer-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd106586">
    <a href="/manual/vote-note.php?id=106586&amp;page=function.mailparse-determine-best-xfer-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V106586" title="16% like this...">
    -4
    </div>
  </div>
  <a href="#106586" class="name">
  <strong class="user"><em>matej dot kovac at gmail dot com</em></strong></a><a class="genanchor" href="#106586"> &para;</a><div class="date" title="2011-11-20 11:12"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom106586">
<div class="phpcode"><code><span class="html">As of mailparse-2.1.5, it can return 7bit, 8bit, base64 and qprint. False on mbstring failure.</span></code></div>
  </div>
 </div>
  <div class="note" id="87969">  <div class="votes">
    <div id="Vu87969">
    <a href="/manual/vote-note.php?id=87969&amp;page=function.mailparse-determine-best-xfer-encoding&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd87969">
    <a href="/manual/vote-note.php?id=87969&amp;page=function.mailparse-determine-best-xfer-encoding&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V87969" title="0% like this...">
    -4
    </div>
  </div>
  <a href="#87969" class="name">
  <strong class="user"><em>mileskeaton at gmail dot com</em></strong></a><a class="genanchor" href="#87969"> &para;</a><div class="date" title="2009-01-02 11:16"><strong>16 years ago</strong></div>
  <div class="text" id="Hcom87969">
<div class="phpcode"><code><span class="html">As far as I can tell, this only returns one of two strings: 'Quoted-Printable' or '7bit'</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=function.mailparse-determine-best-xfer-encoding&amp;repo=en&amp;redirect=https://www.php.net/manual/en/function.mailparse-determine-best-xfer-encoding.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="ref.mailparse.php">Mailparse Functions</a>

                                    <ul class='child-menu-list'>

                                                <li class="current">
                            <a href="function.mailparse-determine-best-xfer-encoding.php" title="mailparse_&#8203;determine_&#8203;best_&#8203;xfer_&#8203;encoding">mailparse_&#8203;determine_&#8203;best_&#8203;xfer_&#8203;encoding</a>
                        </li>
                                                <li class="">
                            <a href="function.mailparse-msg-create.php" title="mailparse_&#8203;msg_&#8203;create">mailparse_&#8203;msg_&#8203;create</a>
                        </li>
                                                <li class="">
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
