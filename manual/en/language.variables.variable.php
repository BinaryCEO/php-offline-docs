<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Variable variables - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/language.variables.variable.php">
 <link rel="shorturl" href="https://www.php.net/variables.variable">
 <link rel="alternate" href="https://www.php.net/variables.variable" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/language.variables.php">
 <link rel="prev" href="https://www.php.net/manual/en/language.variables.scope.php">
 <link rel="next" href="https://www.php.net/manual/en/language.variables.external.php">

 <link rel="alternate" href="https://www.php.net/manual/en/language.variables.variable.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/language.variables.variable.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/language.variables.variable.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/language.variables.variable.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/language.variables.variable.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/language.variables.variable.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/language.variables.variable.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/language.variables.variable.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/language.variables.variable.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/language.variables.variable.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/language.variables.variable.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Variable variables" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Variable variables - Manual" />
<meta name="twitter:description" content="Variable variables" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Variable variables - Manual" />
<meta itemprop="description" content="Variable variables" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Variable variables" />

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
        <a href="language.variables.external.php">
          Variables From External Sources &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="language.variables.scope.php">
          &laquo; Variable scope        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='langref.php'>Language Reference</a></li>      <li><a href='language.variables.php'>Variables</a></li>      </ul>
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
            <option value='en/language.variables.variable.php' selected="selected">English</option>
            <option value='de/language.variables.variable.php'>German</option>
            <option value='es/language.variables.variable.php'>Spanish</option>
            <option value='fr/language.variables.variable.php'>French</option>
            <option value='it/language.variables.variable.php'>Italian</option>
            <option value='ja/language.variables.variable.php'>Japanese</option>
            <option value='pt_BR/language.variables.variable.php'>Brazilian Portuguese</option>
            <option value='ru/language.variables.variable.php'>Russian</option>
            <option value='tr/language.variables.variable.php'>Turkish</option>
            <option value='uk/language.variables.variable.php'>Ukrainian</option>
            <option value='zh/language.variables.variable.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="language.variables.variable" class="sect1">
   <h2 class="title">Variable variables</h2>

   <p class="simpara">
    Sometimes it is convenient to be able to have variable variable
    names. That is, a variable name which can be set and used
    dynamically. A normal variable is set with a statement such as:
   </p>

   <div class="informalexample">
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br />$a </span><span style="color: #007700">= </span><span style="color: #DD0000">'hello'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>

   <p class="simpara">
    A variable variable takes the value of a variable and treats that
    as the name of a variable. In the above example,
    <em>hello</em>, can be used as the name of a variable
    by using two dollar signs. i.e.
   </p>

   <div class="informalexample">
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">$</span><span style="color: #0000BB">$a </span><span style="color: #007700">= </span><span style="color: #DD0000">'world'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>

   <p class="simpara">
    At this point two variables have been defined and stored in the
    PHP symbol tree: <var class="varname">$a</var> with contents &quot;hello&quot; and
    <var class="varname">$hello</var> with contents &quot;world&quot;. Therefore, this
    statement:
   </p>

   <div class="informalexample">
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$a</span><span style="color: #DD0000"> </span><span style="color: #007700">{$</span><span style="color: #0000BB">$a</span><span style="color: #007700">}</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>

   <p class="simpara">
    produces the exact same output as:
   </p>

   <div class="informalexample">
    <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">echo </span><span style="color: #DD0000">"</span><span style="color: #0000BB">$a</span><span style="color: #DD0000"> </span><span style="color: #0000BB">$hello</span><span style="color: #DD0000">"</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
    </div>

   </div>

   <p class="simpara">
    i.e. they both produce: <span class="computeroutput">hello world</span>.
   </p>

   <p class="simpara">
    In order to use variable variables with arrays,
    an ambiguity problem has to be resolved. That is, if the parser sees
    <var class="varname">$$a[1]</var> then it needs to know if
    <var class="varname">$a[1]</var> was meant to be used as a variable, or if
    <var class="varname">$$a</var> was wanted as the variable and then the <code class="literal">[1]</code>
    index from that variable. The syntax for resolving this ambiguity
    is: <var class="varname">${$a[1]}</var> for the first case and
    <var class="varname">${$a}[1]</var> for the second. 
   </p>

   <p class="simpara">
    Class properties may also be accessed using variable property names. The
    variable property name will be resolved within the scope from which the
    call is made. For instance, if there is an expression such as
    <var class="varname">$foo->$bar</var>, then the local scope will be examined for
    <var class="varname">$bar</var> and its value will be used as the name of the
    property of <var class="varname">$foo</var>. This is also true if
    <var class="varname">$bar</var> is an array access.
   </p>

   <p class="simpara">
    Curly braces may also be used to clearly delimit the property
    name. They are most useful when accessing values within a property that
    contains an array, when the property name is made of multiple parts,
    or when the property name contains characters that are not
    otherwise valid (e.g. from <span class="function"><a href="function.json-decode.php" class="function">json_decode()</a></span>
    or <a href="book.simplexml.php" class="link">SimpleXML</a>).
   </p>

   <p class="para">
    <div class="example" id="example-142">
     <p><strong>Example #1 Variable property example</strong></p>
      <div class="example-contents">
<div class="phpcode"><code><span style="color: #000000"><span style="color: #0000BB">&lt;?php<br /></span><span style="color: #007700">class </span><span style="color: #0000BB">Foo </span><span style="color: #007700">{<br />    public </span><span style="color: #0000BB">$bar </span><span style="color: #007700">= </span><span style="color: #DD0000">'I am bar.'</span><span style="color: #007700">;<br />    public </span><span style="color: #0000BB">$arr </span><span style="color: #007700">= [</span><span style="color: #DD0000">'I am A.'</span><span style="color: #007700">, </span><span style="color: #DD0000">'I am B.'</span><span style="color: #007700">, </span><span style="color: #DD0000">'I am C.'</span><span style="color: #007700">];<br />    public </span><span style="color: #0000BB">$r   </span><span style="color: #007700">= </span><span style="color: #DD0000">'I am r.'</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #0000BB">$foo </span><span style="color: #007700">= new </span><span style="color: #0000BB">Foo</span><span style="color: #007700">();<br /></span><span style="color: #0000BB">$bar </span><span style="color: #007700">= </span><span style="color: #DD0000">'bar'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$baz </span><span style="color: #007700">= [</span><span style="color: #DD0000">'foo'</span><span style="color: #007700">, </span><span style="color: #DD0000">'bar'</span><span style="color: #007700">, </span><span style="color: #DD0000">'baz'</span><span style="color: #007700">, </span><span style="color: #DD0000">'quux'</span><span style="color: #007700">];<br />echo </span><span style="color: #0000BB">$foo</span><span style="color: #007700">-&gt;</span><span style="color: #0000BB">$bar </span><span style="color: #007700">. </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">$foo</span><span style="color: #007700">-&gt;{</span><span style="color: #0000BB">$baz</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]} . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$start </span><span style="color: #007700">= </span><span style="color: #DD0000">'b'</span><span style="color: #007700">;<br /></span><span style="color: #0000BB">$end   </span><span style="color: #007700">= </span><span style="color: #DD0000">'ar'</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">$foo</span><span style="color: #007700">-&gt;{</span><span style="color: #0000BB">$start </span><span style="color: #007700">. </span><span style="color: #0000BB">$end</span><span style="color: #007700">} . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">$arr </span><span style="color: #007700">= </span><span style="color: #DD0000">'arr'</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">$foo</span><span style="color: #007700">-&gt;{</span><span style="color: #0000BB">$arr</span><span style="color: #007700">[</span><span style="color: #0000BB">1</span><span style="color: #007700">]} . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br />echo </span><span style="color: #0000BB">$foo</span><span style="color: #007700">-&gt;{</span><span style="color: #0000BB">$arr</span><span style="color: #007700">}[</span><span style="color: #0000BB">1</span><span style="color: #007700">] . </span><span style="color: #DD0000">"\n"</span><span style="color: #007700">;<br /><br /></span><span style="color: #0000BB">?&gt;</span></span></code></div>
     </div>

     <div class="example-contents"><p>The above example will output:</p></div>
     <div class="example-contents screen">
<div class="cdata"><pre>
I am bar.
I am bar.
I am bar.
I am r.
I am B.
</pre></div>
     </div>
    </div>
   </p>

   <div class="warning"><strong class="warning">Warning</strong>
    <p class="simpara">
     Please note that variable variables cannot be used with PHP&#039;s 
     <a href="language.variables.superglobals.php" class="link">Superglobal arrays</a>
     within functions or class methods. The variable <code class="literal">$this</code>
     is also a special variable that cannot be referenced dynamically.
    </p>
   </div>
  
  </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/language/variables.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Flanguage.variables.variable%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=language.variables.variable&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.variables.variable.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">10 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="97222">  <div class="votes">
    <div id="Vu97222">
    <a href="/manual/vote-note.php?id=97222&amp;page=language.variables.variable&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd97222">
    <a href="/manual/vote-note.php?id=97222&amp;page=language.variables.variable&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V97222" title="73% like this...">
    555
    </div>
  </div>
  <a href="#97222" class="name">
  <strong class="user"><em>userb at exampleb dot org</em></strong></a><a class="genanchor" href="#97222"> &para;</a><div class="date" title="2010-04-08 02:39"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom97222">
<div class="phpcode"><code><span class="html"><span class="default">&lt;?php<br /><br />  </span><span class="comment">//You can even add more Dollar Signs<br /><br />  </span><span class="default">$Bar </span><span class="keyword">= </span><span class="string">"a"</span><span class="keyword">;<br />  </span><span class="default">$Foo </span><span class="keyword">= </span><span class="string">"Bar"</span><span class="keyword">;<br />  </span><span class="default">$World </span><span class="keyword">= </span><span class="string">"Foo"</span><span class="keyword">;<br />  </span><span class="default">$Hello </span><span class="keyword">= </span><span class="string">"World"</span><span class="keyword">;<br />  </span><span class="default">$a </span><span class="keyword">= </span><span class="string">"Hello"</span><span class="keyword">;<br /><br />  </span><span class="default">$a</span><span class="keyword">; </span><span class="comment">//Returns Hello<br />  </span><span class="keyword">$</span><span class="default">$a</span><span class="keyword">; </span><span class="comment">//Returns World<br />  </span><span class="keyword">$$</span><span class="default">$a</span><span class="keyword">; </span><span class="comment">//Returns Foo<br />  </span><span class="keyword">$$$</span><span class="default">$a</span><span class="keyword">; </span><span class="comment">//Returns Bar<br />  </span><span class="keyword">$$$$</span><span class="default">$a</span><span class="keyword">; </span><span class="comment">//Returns a<br /><br />  </span><span class="keyword">$$$$$</span><span class="default">$a</span><span class="keyword">; </span><span class="comment">//Returns Hello<br />  </span><span class="keyword">$$$$$$</span><span class="default">$a</span><span class="keyword">; </span><span class="comment">//Returns World<br /><br />  //... and so on ...//<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="127568">  <div class="votes">
    <div id="Vu127568">
    <a href="/manual/vote-note.php?id=127568&amp;page=language.variables.variable&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd127568">
    <a href="/manual/vote-note.php?id=127568&amp;page=language.variables.variable&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V127568" title="65% like this...">
    13
    </div>
  </div>
  <a href="#127568" class="name">
  <strong class="user"><em>sebastopolys at gmail dot com</em></strong></a><a class="genanchor" href="#127568"> &para;</a><div class="date" title="2022-09-03 03:54"><strong>3 years ago</strong></div>
  <div class="text" id="Hcom127568">
<div class="phpcode"><code><span class="html">In addition, it is possible to use associative array to secure name of variables available to be used within a function (or class / not tested).<br /><br />This way the variable variable feature is useful to validate variables; define, output and manage only within the function that receives as parameter <br />an associative array : <br />    array('index'=&gt;'value','index'=&gt;'value');<br />index = reference to variable to be used within function<br />value = name of the variable to be used within function<br /><span class="default">&lt;?php <br /><br />$vars </span><span class="keyword">= [</span><span class="string">'id'</span><span class="keyword">=&gt;</span><span class="string">'user_id'</span><span class="keyword">,</span><span class="string">'email'</span><span class="keyword">=&gt;</span><span class="string">'user_email'</span><span class="keyword">];<br /><br /></span><span class="default">validateVarsFunction</span><span class="keyword">(</span><span class="default">$vars</span><span class="keyword">);<br /><br />function </span><span class="default">validateVarsFunction</span><span class="keyword">(</span><span class="default">$vars</span><span class="keyword">){<br /><br />    </span><span class="comment">//$vars['id']=34; &lt;- does not work<br />     // define allowed variables<br />     </span><span class="default">$user_id</span><span class="keyword">=</span><span class="default">21</span><span class="keyword">;<br />     </span><span class="default">$user_email</span><span class="keyword">=</span><span class="string">'email@mail.com'</span><span class="keyword">;<br /><br />     echo </span><span class="default">$vars</span><span class="keyword">[</span><span class="string">'id'</span><span class="keyword">]; </span><span class="comment">// prints name of variable: user_id<br />     </span><span class="keyword">echo ${</span><span class="default">$vars</span><span class="keyword">[</span><span class="string">'id'</span><span class="keyword">]}; </span><span class="comment">// prints 21    <br />     </span><span class="keyword">echo </span><span class="string">'Email: '</span><span class="keyword">.${</span><span class="default">$vars</span><span class="keyword">[</span><span class="string">'email'</span><span class="keyword">]};  </span><span class="comment">// print email@mail.com<br /><br />     // we don't have the name of the variables before declaring them inside the function<br /></span><span class="keyword">}<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="50912">  <div class="votes">
    <div id="Vu50912">
    <a href="/manual/vote-note.php?id=50912&amp;page=language.variables.variable&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd50912">
    <a href="/manual/vote-note.php?id=50912&amp;page=language.variables.variable&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V50912" title="59% like this...">
    72
    </div>
  </div>
  <a href="#50912" class="name">
  <strong class="user"><em>Anonymous</em></strong></a><a class="genanchor" href="#50912"> &para;</a><div class="date" title="2005-03-13 07:25"><strong>20 years ago</strong></div>
  <div class="text" id="Hcom50912">
<div class="phpcode"><code><span class="html">It may be worth specifically noting, if variable names follow some kind of "template," they can be referenced like this:<br /><br /><span class="default">&lt;?php<br /></span><span class="comment">// Given these variables ...<br /></span><span class="default">$nameTypes    </span><span class="keyword">= array(</span><span class="string">"first"</span><span class="keyword">, </span><span class="string">"last"</span><span class="keyword">, </span><span class="string">"company"</span><span class="keyword">);<br /></span><span class="default">$name_first   </span><span class="keyword">= </span><span class="string">"John"</span><span class="keyword">;<br /></span><span class="default">$name_last    </span><span class="keyword">= </span><span class="string">"Doe"</span><span class="keyword">;<br /></span><span class="default">$name_company </span><span class="keyword">= </span><span class="string">"PHP.net"</span><span class="keyword">;<br /><br /></span><span class="comment">// Then this loop is ...<br /></span><span class="keyword">foreach(</span><span class="default">$nameTypes </span><span class="keyword">as </span><span class="default">$type</span><span class="keyword">)<br />  print ${</span><span class="string">"name_</span><span class="default">$type</span><span class="string">"</span><span class="keyword">} . </span><span class="string">"\n"</span><span class="keyword">;<br /><br /></span><span class="comment">// ... equivalent to this print statement.<br /></span><span class="keyword">print </span><span class="string">"</span><span class="default">$name_first</span><span class="string">\n</span><span class="default">$name_last</span><span class="string">\n</span><span class="default">$name_company</span><span class="string">\n"</span><span class="keyword">;<br /></span><span class="default">?&gt;<br /></span><br />This is apparent from the notes others have left, but is not explicitly stated.</span></code></div>
  </div>
 </div>
  <div class="note" id="123599">  <div class="votes">
    <div id="Vu123599">
    <a href="/manual/vote-note.php?id=123599&amp;page=language.variables.variable&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd123599">
    <a href="/manual/vote-note.php?id=123599&amp;page=language.variables.variable&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V123599" title="61% like this...">
    13
    </div>
  </div>
  <a href="#123599" class="name">
  <strong class="user"><em>marcin dot dzdza at gmail dot com</em></strong></a><a class="genanchor" href="#123599"> &para;</a><div class="date" title="2019-02-10 11:59"><strong>6 years ago</strong></div>
  <div class="text" id="Hcom123599">
<div class="phpcode"><code><span class="html">The feature of variable variable names is welcome, but it should be avoided when possible. Modern IDE software fails to interpret such variables correctly, regular find/replace also fails. It's a kind of magic :) This may really make it hard to refactor code. Imagine you want to rename variable $username to $userName and try to find all occurrences of $username in code by checking "$userName". You may easily omit:<br />$a = 'username';<br />echo $$a;</span></code></div>
  </div>
 </div>
  <div class="note" id="119582">  <div class="votes">
    <div id="Vu119582">
    <a href="/manual/vote-note.php?id=119582&amp;page=language.variables.variable&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd119582">
    <a href="/manual/vote-note.php?id=119582&amp;page=language.variables.variable&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V119582" title="57% like this...">
    14
    </div>
  </div>
  <a href="#119582" class="name">
  <strong class="user"><em>herebepost (ta at ta) [iwonderr] gmail dot com</em></strong></a><a class="genanchor" href="#119582"> &para;</a><div class="date" title="2016-07-11 07:32"><strong>9 years ago</strong></div>
  <div class="text" id="Hcom119582">
<div class="phpcode"><code><span class="html">While not relevant in everyday PHP programming, it seems to be possible to insert whitespace and comments between the dollar signs of a variable variable.  All three comment styles work. This information becomes relevant when writing a parser, tokenizer or something else that operates on PHP syntax.<br /><br /><span class="default">&lt;?php<br /><br />    $foo </span><span class="keyword">= </span><span class="string">'bar'</span><span class="keyword">;<br />    $<br /><br />    </span><span class="comment">/*<br />        I am complete legal and will compile without notices or error as a variable variable.<br />    */<br />        </span><span class="default">$foo </span><span class="keyword">= </span><span class="string">'magic'</span><span class="keyword">;<br /><br />    echo </span><span class="default">$bar</span><span class="keyword">; </span><span class="comment">// Outputs magic.<br /><br /></span><span class="default">?&gt;<br /></span><br />Behaviour tested with PHP Version 5.6.19</span></code></div>
  </div>
 </div>
  <div class="note" id="116632">  <div class="votes">
    <div id="Vu116632">
    <a href="/manual/vote-note.php?id=116632&amp;page=language.variables.variable&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd116632">
    <a href="/manual/vote-note.php?id=116632&amp;page=language.variables.variable&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V116632" title="57% like this...">
    14
    </div>
  </div>
  <a href="#116632" class="name">
  <strong class="user"><em>jefrey.sobreira [at] gmail [dot] com</em></strong></a><a class="genanchor" href="#116632"> &para;</a><div class="date" title="2015-02-01 05:34"><strong>10 years ago</strong></div>
  <div class="text" id="Hcom116632">
<div class="phpcode"><code><span class="html">If you want to use a variable value in part of the name of a variable variable (not the whole name itself), you can do like the following:<br /><br /><span class="default">&lt;?php<br />$price_for_monday </span><span class="keyword">= </span><span class="default">10</span><span class="keyword">;<br /></span><span class="default">$price_for_tuesday </span><span class="keyword">= </span><span class="default">20</span><span class="keyword">;<br /></span><span class="default">$price_for_wednesday </span><span class="keyword">= </span><span class="default">30</span><span class="keyword">;<br /><br /></span><span class="default">$today </span><span class="keyword">= </span><span class="string">'tuesday'</span><span class="keyword">;<br /><br /></span><span class="default">$price_for_today </span><span class="keyword">= ${ </span><span class="string">'price_for_' </span><span class="keyword">. </span><span class="default">$today</span><span class="keyword">};<br />echo </span><span class="default">$price_for_today</span><span class="keyword">; </span><span class="comment">// will return 20<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="75669">  <div class="votes">
    <div id="Vu75669">
    <a href="/manual/vote-note.php?id=75669&amp;page=language.variables.variable&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd75669">
    <a href="/manual/vote-note.php?id=75669&amp;page=language.variables.variable&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V75669" title="57% like this...">
    10
    </div>
  </div>
  <a href="#75669" class="name">
  <strong class="user"><em>Sinured</em></strong></a><a class="genanchor" href="#75669"> &para;</a><div class="date" title="2007-06-11 06:07"><strong>18 years ago</strong></div>
  <div class="text" id="Hcom75669">
<div class="phpcode"><code><span class="html">One interesting thing I found out: You can concatenate variables and use spaces. Concatenating constants and function calls are also possible.
<br />
<br /><span class="default">&lt;?php
<br />define</span><span class="keyword">(</span><span class="string">'ONE'</span><span class="keyword">, </span><span class="default">1</span><span class="keyword">);
<br />function </span><span class="default">one</span><span class="keyword">() {
<br />    return </span><span class="default">1</span><span class="keyword">;
<br />}
<br /></span><span class="default">$one </span><span class="keyword">= </span><span class="default">1</span><span class="keyword">;
<br />
<br />${</span><span class="string">"foo</span><span class="default">$one</span><span class="string">"</span><span class="keyword">} = </span><span class="string">'foo'</span><span class="keyword">;
<br />echo </span><span class="default">$foo1</span><span class="keyword">; </span><span class="comment">// foo
<br /></span><span class="keyword">${</span><span class="string">'foo' </span><span class="keyword">. </span><span class="default">ONE</span><span class="keyword">} = </span><span class="string">'bar'</span><span class="keyword">; 
<br />echo </span><span class="default">$foo1</span><span class="keyword">; </span><span class="comment">// bar
<br /></span><span class="keyword">${</span><span class="string">'foo' </span><span class="keyword">. </span><span class="default">one</span><span class="keyword">()} = </span><span class="string">'baz'</span><span class="keyword">;
<br />echo </span><span class="default">$foo1</span><span class="keyword">; </span><span class="comment">// baz
<br /></span><span class="default">?&gt;
<br /></span>
<br />This syntax doesn't work for functions:
<br />
<br /><span class="default">&lt;?php
<br />$foo </span><span class="keyword">= </span><span class="string">'info'</span><span class="keyword">;
<br />{</span><span class="string">"php</span><span class="default">$foo</span><span class="string">"</span><span class="keyword">}(); </span><span class="comment">// Parse error
<br />
<br />// You'll have to do:
<br /></span><span class="default">$func </span><span class="keyword">= </span><span class="string">"php</span><span class="default">$foo</span><span class="string">"</span><span class="keyword">;
<br /></span><span class="default">$func</span><span class="keyword">();
<br /></span><span class="default">?&gt;
<br /></span>
<br />Note: Don't leave out the quotes on strings inside the curly braces, PHP won't handle that graciously.</span></code></div>
  </div>
 </div>
  <div class="note" id="98641">  <div class="votes">
    <div id="Vu98641">
    <a href="/manual/vote-note.php?id=98641&amp;page=language.variables.variable&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd98641">
    <a href="/manual/vote-note.php?id=98641&amp;page=language.variables.variable&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V98641" title="54% like this...">
    15
    </div>
  </div>
  <a href="#98641" class="name">
  <strong class="user"><em>mason</em></strong></a><a class="genanchor" href="#98641"> &para;</a><div class="date" title="2010-06-28 12:39"><strong>15 years ago</strong></div>
  <div class="text" id="Hcom98641">
<div class="phpcode"><code><span class="html">PHP actually supports invoking a new instance of a class using a variable class name since at least version 5.2<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Foo </span><span class="keyword">{<br />   public function </span><span class="default">hello</span><span class="keyword">() {<br />      echo </span><span class="string">'Hello world!'</span><span class="keyword">;<br />   }<br />}<br /></span><span class="default">$my_foo </span><span class="keyword">= </span><span class="string">'Foo'</span><span class="keyword">;<br /></span><span class="default">$a </span><span class="keyword">= new </span><span class="default">$my_foo</span><span class="keyword">();<br /></span><span class="default">$a</span><span class="keyword">-&gt;</span><span class="default">hello</span><span class="keyword">(); </span><span class="comment">//prints 'Hello world!'<br /></span><span class="default">?&gt;<br /></span><br />Additionally, you can access static methods and properties using variable class names, but only since PHP 5.3<br /><br /><span class="default">&lt;?php<br /></span><span class="keyword">class </span><span class="default">Foo </span><span class="keyword">{<br />   public static function </span><span class="default">hello</span><span class="keyword">() {<br />      echo </span><span class="string">'Hello world!'</span><span class="keyword">;<br />   }<br />}<br /></span><span class="default">$my_foo </span><span class="keyword">= </span><span class="string">'Foo'</span><span class="keyword">;<br /></span><span class="default">$my_foo</span><span class="keyword">::</span><span class="default">hello</span><span class="keyword">(); </span><span class="comment">//prints 'Hello world!'<br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="109230">  <div class="votes">
    <div id="Vu109230">
    <a href="/manual/vote-note.php?id=109230&amp;page=language.variables.variable&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd109230">
    <a href="/manual/vote-note.php?id=109230&amp;page=language.variables.variable&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V109230" title="53% like this...">
    5
    </div>
  </div>
  <a href="#109230" class="name">
  <strong class="user"><em>nils dot rocine at gmail dot com</em></strong></a><a class="genanchor" href="#109230"> &para;</a><div class="date" title="2012-06-28 01:58"><strong>13 years ago</strong></div>
  <div class="text" id="Hcom109230">
<div class="phpcode"><code><span class="html">Variable Class Instantiation with Namespace Gotcha:<br /><br />Say you have a class you'd like to instantiate via a variable (with a string value of the Class name)<br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">class </span><span class="default">Foo <br /></span><span class="keyword">{ <br />    public function </span><span class="default">__construct</span><span class="keyword">() <br />    { <br />        echo </span><span class="string">"I'm a real class!" </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">$class </span><span class="keyword">= </span><span class="string">'Foo'</span><span class="keyword">;<br /><br /></span><span class="default">$instance </span><span class="keyword">= new </span><span class="default">$class</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;<br /></span><br />The above works fine UNLESS you are in a (defined) namespace. Then you must provide the full namespaced identifier of the class as shown below. This is the case EVEN THOUGH the instancing happens in the same namespace. Instancing a class normally (not through a variable) does not require the namespace. This seems to establish the pattern that if you are using an namespace and you have a class name in a string, you must provide the namespace with the class for the PHP engine to correctly resolve (other cases: class_exists(), interface_exists(), etc.) <br /><br /><span class="default">&lt;?php<br /><br /></span><span class="keyword">namespace </span><span class="default">MyNamespace</span><span class="keyword">;<br /><br />class </span><span class="default">Foo <br /></span><span class="keyword">{ <br />    public function </span><span class="default">__construct</span><span class="keyword">() <br />    { <br />        echo </span><span class="string">"I'm a real class!" </span><span class="keyword">. </span><span class="default">PHP_EOL</span><span class="keyword">;<br />    }<br />}<br /><br /></span><span class="default">$class </span><span class="keyword">= </span><span class="string">'MyNamespace\Foo'</span><span class="keyword">;<br /><br /></span><span class="default">$instance </span><span class="keyword">= new </span><span class="default">$class</span><span class="keyword">;<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div>
  <div class="note" id="81033">  <div class="votes">
    <div id="Vu81033">
    <a href="/manual/vote-note.php?id=81033&amp;page=language.variables.variable&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd81033">
    <a href="/manual/vote-note.php?id=81033&amp;page=language.variables.variable&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V81033" title="51% like this...">
    3
    </div>
  </div>
  <a href="#81033" class="name">
  <strong class="user"><em>Nathan Hammond</em></strong></a><a class="genanchor" href="#81033"> &para;</a><div class="date" title="2008-02-11 03:41"><strong>17 years ago</strong></div>
  <div class="text" id="Hcom81033">
<div class="phpcode"><code><span class="html">These are the scenarios that you may run into trying to reference superglobals dynamically. Whether or not it works appears to be dependent upon the current scope.<br /><br /><span class="default">&lt;?php<br /><br />$_POST</span><span class="keyword">[</span><span class="string">'asdf'</span><span class="keyword">] = </span><span class="string">'something'</span><span class="keyword">;<br /><br />function </span><span class="default">test</span><span class="keyword">() {<br />    </span><span class="comment">// NULL -- not what initially expected<br />    </span><span class="default">$string </span><span class="keyword">= </span><span class="string">'_POST'</span><span class="keyword">;<br />    </span><span class="default">var_dump</span><span class="keyword">(${</span><span class="default">$string</span><span class="keyword">});<br /><br />    </span><span class="comment">// Works as expected<br />    </span><span class="default">var_dump</span><span class="keyword">(${</span><span class="string">'_POST'</span><span class="keyword">});<br /><br />    </span><span class="comment">// Works as expected<br />    </span><span class="keyword">global ${</span><span class="default">$string</span><span class="keyword">};<br />    </span><span class="default">var_dump</span><span class="keyword">(${</span><span class="default">$string</span><span class="keyword">});<br /><br />}<br /><br /></span><span class="comment">// Works as expected<br /></span><span class="default">$string </span><span class="keyword">= </span><span class="string">'_POST'</span><span class="keyword">;<br /></span><span class="default">var_dump</span><span class="keyword">(${</span><span class="default">$string</span><span class="keyword">});<br /><br /></span><span class="default">test</span><span class="keyword">();<br /><br /></span><span class="default">?&gt;</span></span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=language.variables.variable&amp;repo=en&amp;redirect=https://www.php.net/manual/en/language.variables.variable.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="language.variables.php">Variables</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="language.variables.basics.php" title="Basics">Basics</a>
                        </li>
                                                <li class="">
                            <a href="language.variables.predefined.php" title="Predefined Variables">Predefined Variables</a>
                        </li>
                                                <li class="">
                            <a href="language.variables.scope.php" title="Variable scope">Variable scope</a>
                        </li>
                                                <li class="current">
                            <a href="language.variables.variable.php" title="Variable variables">Variable variables</a>
                        </li>
                                                <li class="">
                            <a href="language.variables.external.php" title="Variables From External Sources">Variables From External Sources</a>
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
