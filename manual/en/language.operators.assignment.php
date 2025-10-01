<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Assignment - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.operators.assignment.php">
 <link rel="shorturl" href="https://www.php.net/operators.assignment">
 <link rel="alternate" href="https://www.php.net/operators.assignment" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.operators.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.operators.increment.php">
 <link rel="next" href="https://www.php.net/manual/en/language.operators.bitwise.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.operators.assignment.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.operators.assignment.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.operators.assignment.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.operators.assignment.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.operators.assignment.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.operators.assignment.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.operators.assignment.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.operators.assignment.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.operators.assignment.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.operators.assignment.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.operators.assignment.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Assignment Operators" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Assignment - Manual" />
<meta name="twitter:description" content="Assignment Operators" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Assignment - Manual" />
<meta itemprop="description" content="Assignment Operators" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Assignment Operators" />

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
        <a href="language.operators.bitwise.php">
          Bitwise &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.operators.increment.php">
          &laquo; Increment and Decrement        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.operators.php'>Operators</a></li>      </ul>
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
            <option value='en/language.operators.assignment.php' selected="selected">English</option>
            <option value='de/language.operators.assignment.php'>German</option>
            <option value='es/language.operators.assignment.php'>Spanish</option>
            <option value='fr/language.operators.assignment.php'>French</option>
            <option value='it/language.operators.assignment.php'>Italian</option>
            <option value='ja/language.operators.assignment.php'>Japanese</option>
            <option value='pt_BR/language.operators.assignment.php'>Brazilian Portuguese</option>
            <option value='ru/language.operators.assignment.php'>Russian</option>
            <option value='tr/language.operators.assignment.php'>Turkish</option>
            <option value='uk/language.operators.assignment.php'>Ukrainian</option>
            <option value='zh/language.operators.assignment.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.operators.assignment" class="sect1">
 <h2 class="title">Assignment Operators</h2>
 
 <p class="simpara">
  The basic assignment operator is &quot;=&quot;. Your first inclination might
  be to think of this as &quot;equal to&quot;. Don&#039;t. It really means that the
  left operand gets set to the value of the expression on the
  right (that is, &quot;gets set to&quot;).
 </p>
 <p class="para">
  The value of an assignment expression is the value assigned. That
  is, the value of &quot;<code class="literal">$a = 3</code>&quot; is 3. This allows you to do some tricky
  things:
  <div class="example" id="example-159">
   <p><strong>Example #1 Nested Assignments</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$a </span><span style="color: #007700">= (</span><span style="color: #0000BB">$b </span><span style="color: #007700">= </span><span style="color: #0000BB">4</span><span style="color: #007700">) + </span><span style="color: #0000BB">5</span><span style="color: #007700">; </span><span style="color: #FF8000">// $a is equal to 9 now, and $b has been set to 4.<br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </p>
 <p class="para">
  In addition to the basic assignment operator, there are &quot;combined
  operators&quot; for all of the <a href="language.operators.php" class="link">binary
  arithmetic</a>, array union and string operators that allow you to use a value in an
  expression and then set its value to the result of that expression. For
  example:
  <div class="example" id="example-160">
   <p><strong>Example #2 Combined Assignments</strong></p>
   <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$a </span><span style="color: #007700">= </span><span style="color: #0000BB">3</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">+= </span><span style="color: #0000BB">5</span><span style="color: #007700">; </span><span style="color: #FF8000">// sets $a to 8, as if we had said: $a = $a + 5;<br /></span><span style="color: #0000BB">$b </span><span style="color: #007700">= </span><span style="color: #DD0000">"Hello "</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$b </span><span style="color: #007700">.= </span><span style="color: #DD0000">"There!"</span><span style="color: #007700">; </span><span style="color: #FF8000">// sets $b to "Hello There!", just like $b = $b . "There!";<br /><br /></span><span style="color: #0000BB">var_dump</span><span style="color: #007700">(</span><span style="color: #0000BB">$a</span><span style="color: #007700">, </span><span style="color: #0000BB">$b</span><span style="color: #007700">);<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
   </div>

  </div>
 </p>
 <p class="para">
  Note that the assignment copies the original variable to the new
  one (assignment by value), so changes to one will not affect the
  other. This may also have relevance if you need to copy something
  like a large array inside a tight loop.
 </p>
 <p class="para">
  An exception to the usual assignment by value behaviour within PHP occurs
  with <span class="type"><a href="language.types.object.php" class="type object">object</a></span>s, which are assigned by reference.
  Objects may be explicitly copied via the <a href="language.oop5.cloning.php" class="link">clone</a> keyword.
 </p>

 <div class="sect2" id="language.operators.assignment.reference">
  <h3 class="title">Assignment by Reference</h3>
  <p class="para">
   Assignment by reference is also supported, using the
   &quot;<span class="computeroutput">$var = &amp;$othervar;</span>&quot; syntax.
   Assignment by reference means that both variables end up pointing at the
   same data, and nothing is copied anywhere.
  </p>
  <p class="para">
   <div class="example" id="example-161">
    <p><strong>Example #3 Assigning by reference</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$a </span><span style="color: #007700">= </span><span style="color: #0000BB">3</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$b </span><span style="color: #007700">= &amp;</span><span style="color: #0000BB">$a</span><span style="color: #007700">; </span><span style="color: #FF8000">// $b is a reference to $a<br /><br /></span><span style="color: #007700">print </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$a</span><span style="color: #DD0000">\n"</span><span style="color: #007700">; </span><span style="color: #FF8000">// prints 3<br /></span><span style="color: #007700">print </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$b</span><span style="color: #DD0000">\n"</span><span style="color: #007700">; </span><span style="color: #FF8000">// prints 3<br /><br /></span><span style="color: #0000BB">$a </span><span style="color: #007700">= </span><span style="color: #0000BB">4</span><span style="color: #007700">; </span><span style="color: #FF8000">// change $a<br /><br /></span><span style="color: #007700">print </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$a</span><span style="color: #DD0000">\n"</span><span style="color: #007700">; </span><span style="color: #FF8000">// prints 4<br /></span><span style="color: #007700">print </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$b</span><span style="color: #DD0000">\n"</span><span style="color: #007700">; </span><span style="color: #FF8000">// prints 4 as well, since $b is a reference to $a, which has<br />              // been changed<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>
  </p>
  <p class="para">
   The <a href="language.oop5.basic.php#language.oop5.basic.new" class="link">new</a>
   operator returns a reference automatically, as such assigning the result of
   <a href="language.oop5.basic.php#language.oop5.basic.new" class="link">new</a> by reference is an error.
  </p>
  <p class="para">
   <div class="example" id="example-162">
    <p><strong>Example #4 new Operator By-Reference</strong></p>
    <div class="example-contents">
<div class="annotation-interactive phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">C </span><span style="color: #007700">{}<br /><br /></span><span style="color: #0000BB">$o </span><span style="color: #007700">= &amp;new </span><span style="color: #0000BB">C</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

    <div class="example-contents"><p>The above example will output:</p></div>
    <div class="example-contents screen">
<div class="annotation-interactive cdata"><pre>
Parse error: syntax error, unexpected token &quot;;&quot;, expecting &quot;(&quot;
</pre></div>
    </div>
   </div>
  </p>
  <p class="para">
   More information on references and their potential uses can be found in
   the <a href="language.references.php" class="link">References Explained</a>
   section of the manual.
  </p>
 </div>

 <div class="sect2" id="language.operators.assignment.arithmetic">
  <h3 class="title">Arithmetic Assignment Operators</h3>
  <table class="doctable informaltable">
   
    <thead>
     <tr>
      <th>Example</th>
      <th>Equivalent</th>
      <th>Operation</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
      <td>$a += $b</td>
      <td>$a = $a + $b</td>
      <td>Addition</td>
     </tr>

     <tr>
      <td>$a -= $b</td>
      <td>$a = $a - $b</td>
      <td>Subtraction</td>
     </tr>

     <tr>
      <td>$a *= $b</td>
      <td>$a = $a * $b</td>
      <td>Multiplication</td>
     </tr>

     <tr>
      <td>$a /= $b</td>
      <td>$a = $a / $b</td>
      <td>Division</td>
     </tr>

     <tr>
      <td>$a %= $b</td>
      <td>$a = $a % $b</td>
      <td>Modulus</td>
     </tr>

     <tr>
      <td>$a **= $b</td>
      <td>$a = $a ** $b</td>
      <td>Exponentiation</td>
     </tr>

    </tbody>
   
  </table>

 </div>

 <div class="sect2" id="language.operators.assignment.bitwise">
  <h3 class="title">Bitwise Assignment Operators</h3>
  <table class="doctable informaltable">
   
    <thead>
     <tr>
      <th>Example</th>
      <th>Equivalent</th>
      <th>Operation</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
      <td>$a &amp;= $b</td>
      <td>$a = $a &amp; $b</td>
      <td>Bitwise And</td>
     </tr>

     <tr>
      <td>$a |= $b</td>
      <td>$a = $a | $b</td>
      <td>Bitwise Or</td>
     </tr>

     <tr>
      <td>$a ^= $b</td>
      <td>$a = $a ^ $b</td>
      <td>Bitwise Xor</td>
     </tr>

     <tr>
      <td>$a &lt;&lt;= $b</td>
      <td>$a = $a &lt;&lt; $b</td>
      <td>Left Shift</td>
     </tr>

     <tr>
      <td>$a &gt;&gt;= $b</td>
      <td>$a = $a &gt;&gt; $b</td>
      <td>Right Shift</td>
     </tr>

    </tbody>
   
  </table>

 </div>

 <div class="sect2" id="language.operators.assignment.other">
  <h3 class="title">Other Assignment Operators</h3>
  <table class="doctable informaltable">
   
    <thead>
     <tr>
      <th>Example</th>
      <th>Equivalent</th>
      <th>Operation</th>
     </tr>

    </thead>

    <tbody class="tbody">
     <tr>
      <td>$a .= $b</td>
      <td>$a = $a . $b</td>
      <td>String Concatenation</td>
     </tr>

     <tr>
      <td>$a ??= $b</td>
      <td>$a = $a ?? $b</td>
      <td>Null Coalesce</td>
     </tr>

    </tbody>
   
  </table>

 </div>

 <div class="sect2" id="language.operators.assignment.see-also">
  <h3 class="title">See Also</h3>
  <p class="para">
   <ul class="simplelist">
    <li><a href="language.operators.arithmetic.php" class="link">arithmetic operators</a></li>
    <li><a href="language.operators.bitwise.php" class="link">bitwise operators</a></li>
    <li><a href="language.operators.comparison.php#language.operators.comparison.coalesce" class="link">null coalescing operator</a></li>
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
        <a href="https://github.com/php/doc-en/blob/master/language/operators/assignment.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.operators.assignment%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.operators.assignment&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.operators.assignment.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">4 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="102385">  <div class="votes">
    <div id="Vu102385">
    <a href="/manual/vote-note.php?id=102385&amp;page=language.operators.assignment&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd102385">
    <a href="/manual/vote-note.php?id=102385&amp;page=language.operators.assignment&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V102385" title="73% like this...">
    144
    </div>
  </div>
  <a href="#102385" class="name">
  <strong class="user"><em>Peter, Moscow</em></strong></a><a class="genanchor" href="#102385"> &para;</a><div class="date" title="2011-02-11 01:44"><strong>14 years ago</strong></div>
  <div class="text" id="Hcom102385">
<div class="phpcode"><code><span class="html">Using $text .= "additional text"; instead of $text =  $text ."additional text"; can seriously enhance performance due to memory allocation efficiency. <br /><br />I reduced execution time from 5 sec to .5 sec (10 times) by simply switching to the first pattern for a loop with 900 iterations over a string $text that reaches 800K by the end.</span></code></div>
  </div>
 </div>
  <div class="note" id="116873">  <div class="votes">
    <div id="Vu116873">
    <a href="/manual/vote-note.php?id=116873&amp;page=language.operators.assignment&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116873">
    <a href="/manual/vote-note.php?id=116873&amp;page=language.operators.assignment&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116873" title="64% like this...">
    60
    </div>
  </div>
  <a href="#116873" class="name">
  <strong class="user"><em>Robert Schneider</em></strong></a><a class="genanchor" href="#116873"> &para;</a><div class="date" title="2015-03-13 01:03"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116873">
<div class="phpcode"><code><span class="html">Be aware of assignments with conditionals. The assignment operator is stronger as 'and', 'or' and 'xor'.<br /><br /><span class="default">&lt;?php <br />$x </span><span class="keyword">= </span><span class="default">true </span><span class="keyword">and </span><span class="default">false</span><span class="keyword">;   </span><span class="comment">//$x will be true<br /></span><span class="default">$y </span><span class="keyword">= (</span><span class="default">true </span><span class="keyword">and </span><span class="default">false</span><span class="keyword">); </span><span class="comment">//$y will be false<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="78345">  <div class="votes">
    <div id="Vu78345">
    <a href="/manual/vote-note.php?id=78345&amp;page=language.operators.assignment&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd78345">
    <a href="/manual/vote-note.php?id=78345&amp;page=language.operators.assignment&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V78345" title="58% like this...">
    31
    </div>
  </div>
  <a href="#78345" class="name">
  <strong class="user"><em>Hayley Watson</em></strong></a><a class="genanchor" href="#78345"> &para;</a><div class="date" title="2007-10-07 03:22"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom78345">
<div class="phpcode"><code><span class="html">bradlis7 at bradlis7 dot com's description is a bit confusing. Here it is rephrased.<br /><br /><span class="default">&lt;?php<br />$a </span><span class="keyword">= </span><span class="string">'a'</span><span class="keyword">;<br /></span><span class="default">$b </span><span class="keyword">= </span><span class="string">'b'</span><span class="keyword">;<br /><br /></span><span class="default">$a </span><span class="keyword">.= </span><span class="default">$b </span><span class="keyword">.= </span><span class="string">"foo"</span><span class="keyword">;<br /><br />echo </span><span class="default">$a</span><span class="keyword">,</span><span class="string">"\n"</span><span class="keyword">,</span><span class="default">$b</span><span class="keyword">;</span><span class="default">?&gt;<br /></span>outputs<br /><br />abfoo<br />bfoo<br /><br />Because the assignment operators are right-associative and evaluate to the result of the assignment<br /><span class="default">&lt;?php<br />$a </span><span class="keyword">.= </span><span class="default">$b </span><span class="keyword">.= </span><span class="string">"foo"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span>is equivalent to<br /><span class="default">&lt;?php<br />$a </span><span class="keyword">.= (</span><span class="default">$b </span><span class="keyword">.= </span><span class="string">"foo"</span><span class="keyword">);<br /></span><span class="default">?&gt;<br /></span>and therefore<br /><span class="default">&lt;?php<br />$b </span><span class="keyword">.= </span><span class="string">"foo"</span><span class="keyword">;<br /></span><span class="default">$a </span><span class="keyword">.= </span><span class="default">$b</span><span class="keyword">;<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="117641">  <div class="votes">
    <div id="Vu117641">
    <a href="/manual/vote-note.php?id=117641&amp;page=language.operators.assignment&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd117641">
    <a href="/manual/vote-note.php?id=117641&amp;page=language.operators.assignment&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V117641" title="57% like this...">
    17
    </div>
  </div>
  <a href="#117641" class="name">
  <strong class="user"><em>asc at putc dot de</em></strong></a><a class="genanchor" href="#117641"> &para;</a><div class="date" title="2015-07-13 02:39"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom117641">
<div class="phpcode"><code><span class="html">PHP uses a temporary variable for combined assign-operators (unlike JavaScript), therefore the left-hand-side (target) gets evaluated last.<br /><br />Input:<br />$a += $b + $c; <br /><br />Meaning:<br />$a = ($b + $c) + $a;<br /><br />Not:<br />$a = $a + ($b + $c);<br /><br />This can be important if the target gets modified inside the expression.<br /><br />$a = 0;<br />$a += (++$a) + (++$a); // yields 5 (instead of 4)</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.operators.assignment&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.operators.assignment.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.operators.php">Operators</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="language.operators.precedence.php" title="Operator Precedence">Operator Precedence</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.arithmetic.php" title="Arithmetic">Arithmetic</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.increment.php" title="Increment and Decrement">Increment and Decrement</a>
                        </li>
                                                <li class="current">
                            <a href="language.operators.assignment.php" title="Assignment">Assignment</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.bitwise.php" title="Bitwise">Bitwise</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.comparison.php" title="Comparison">Comparison</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.errorcontrol.php" title="Error Control">Error Control</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.execution.php" title="Execution">Execution</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.logical.php" title="Logic">Logic</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.string.php" title="String">String</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.array.php" title="Array">Array</a>
                        </li>
                                                <li class="">
                            <a href="language.operators.type.php" title="Type">Type</a>
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
