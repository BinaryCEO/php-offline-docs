<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

     
  
  <title>PHP: Character classes - Manual</title>

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

 <link rel="canonical" href="https://www.php.net/manual/en/regexp.reference.character-classes.php">
 <link rel="shorturl" href="https://www.php.net/manual/en/regexp.reference.character-classes.php">
 <link rel="alternate" href="https://www.php.net/manual/en/regexp.reference.character-classes.php" hreflang="x-default">

 <link rel="contents" href="https://www.php.net/manual/en/index.php">
 <link rel="index" href="https://www.php.net/manual/en/reference.pcre.pattern.syntax.php">
 <link rel="prev" href="https://www.php.net/manual/en/regexp.reference.dot.php">
 <link rel="next" href="https://www.php.net/manual/en/regexp.reference.alternation.php">

 <link rel="alternate" href="https://www.php.net/manual/en/regexp.reference.character-classes.php" hreflang="en">
 <link rel="alternate" href="https://www.php.net/manual/de/regexp.reference.character-classes.php" hreflang="de">
 <link rel="alternate" href="https://www.php.net/manual/es/regexp.reference.character-classes.php" hreflang="es">
 <link rel="alternate" href="https://www.php.net/manual/fr/regexp.reference.character-classes.php" hreflang="fr">
 <link rel="alternate" href="https://www.php.net/manual/it/regexp.reference.character-classes.php" hreflang="it">
 <link rel="alternate" href="https://www.php.net/manual/ja/regexp.reference.character-classes.php" hreflang="ja">
 <link rel="alternate" href="https://www.php.net/manual/pt_BR/regexp.reference.character-classes.php" hreflang="pt_BR">
 <link rel="alternate" href="https://www.php.net/manual/ru/regexp.reference.character-classes.php" hreflang="ru">
 <link rel="alternate" href="https://www.php.net/manual/tr/regexp.reference.character-classes.php" hreflang="tr">
 <link rel="alternate" href="https://www.php.net/manual/uk/regexp.reference.character-classes.php" hreflang="uk">
 <link rel="alternate" href="https://www.php.net/manual/zh/regexp.reference.character-classes.php" hreflang="zh">

<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Fira/fira.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/fonts/Font-Awesome/css/fontello.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-base.css" media="screen">
<link rel="stylesheet" type="text/css" href="/manual/en/styles/theme-medium.css" media="screen">


 

<meta name="Description" content="Character classes" />

<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@official_php" />
<meta name="twitter:title" content="PHP: Character classes - Manual" />
<meta name="twitter:description" content="Character classes" />
<meta name="twitter:creator" content="@official_php" />
<meta name="twitter:image:src" content="https://www.php.net/images/meta-image.png" />

<meta itemprop="name" content="PHP: Character classes - Manual" />
<meta itemprop="description" content="Character classes" />
<meta itemprop="image" content="https://www.php.net/images/meta-image.png" />

<meta property="og:image" content="https://www.php.net/images/meta-image.png" />
<meta property="og:description" content="Character classes" />

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
        <a href="regexp.reference.alternation.php">
          Alternation &raquo;
        </a>
      </div>
              <div class="prev">
        <a href="regexp.reference.dot.php">
          &laquo; Dot        </a>
      </div>
          <ul>
            <li><a href='index.php'>PHP Manual</a></li>      <li><a href='funcref.php'>Function Reference</a></li>      <li><a href='refs.basic.text.php'>Text Processing</a></li>      <li><a href='book.pcre.php'>PCRE</a></li>      <li><a href='pcre.pattern.php'>PCRE Patterns</a></li>      <li><a href='reference.pcre.pattern.syntax.php'>PCRE regex syntax</a></li>      </ul>
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
            <option value='en/regexp.reference.character-classes.php' selected="selected">English</option>
            <option value='de/regexp.reference.character-classes.php'>German</option>
            <option value='es/regexp.reference.character-classes.php'>Spanish</option>
            <option value='fr/regexp.reference.character-classes.php'>French</option>
            <option value='it/regexp.reference.character-classes.php'>Italian</option>
            <option value='ja/regexp.reference.character-classes.php'>Japanese</option>
            <option value='pt_BR/regexp.reference.character-classes.php'>Brazilian Portuguese</option>
            <option value='ru/regexp.reference.character-classes.php'>Russian</option>
            <option value='tr/regexp.reference.character-classes.php'>Turkish</option>
            <option value='uk/regexp.reference.character-classes.php'>Ukrainian</option>
            <option value='zh/regexp.reference.character-classes.php'>Chinese (Simplified)</option>
            <option value='help-translate.php'>Other</option>
          </select>
        </fieldset>
      </form>
    </div>
  </div><div id="regexp.reference.character-classes" class="section">
  <h2 class="title">Character classes</h2>
  <p class="para">
   An opening square bracket introduces a character class,
   terminated by a closing square bracket. A closing square
   bracket on its own is not special. If a closing square
   bracket is required as a member of the class, it should be
   the first data character in the class (after an initial
   circumflex, if present) or escaped with a backslash.
  </p>
  <p class="para">
   A character class matches a single character in the subject;
   the character must be in the set of characters defined by
   the class, unless the first character in the class is a
   circumflex, in which case the subject character must not be in
   the set defined by the class. If a circumflex is actually
   required as a member of the class, ensure it is not the
   first character, or escape it with a backslash.
  </p>
  <p class="para">
   For example, the character class [aeiou] matches any lower
   case vowel, while [^aeiou] matches any character that is not
   a lower case vowel. Note that a circumflex is just a
   convenient notation for specifying the characters which are in
   the class by enumerating those that are not. It is not an
   assertion: it still consumes a character from the subject
   string, and fails if the current pointer is at the end of
   the string.
  </p>
  <p class="para">
   When case-insensitive (caseless) matching is set, any letters
   in a class represent both their upper case and lower case
   versions, so for example, an insensitive [aeiou] matches &quot;A&quot;
   as well as &quot;a&quot;, and an insensitive [^aeiou] does not match
   &quot;A&quot;, whereas a sensitive (caseful) version would.
  </p>
  <p class="para">
   The newline character is never treated in any special way in
   character classes, whatever the setting of the <a href="reference.pcre.pattern.modifiers.php" class="link">PCRE_DOTALL</a>
   or <a href="reference.pcre.pattern.modifiers.php" class="link">PCRE_MULTILINE</a>
   options is. A class such as [^a] will always match a newline.
  </p>
  <p class="para">
   The minus (hyphen) character can be used to specify a range
   of characters in a character class. For example, [d-m]
   matches any letter between d and m, inclusive. If a minus
   character is required in a class, it must be escaped with a
   backslash or appear in a position where it cannot be
   interpreted as indicating a range, typically as the first or last
   character in the class.
  </p>
  <p class="para">
   It is not possible to have the literal character &quot;]&quot; as the
   end character of a range. A pattern such as [W-]46] is
   interpreted as a class of two characters (&quot;W&quot; and &quot;-&quot;)
   followed by a literal string &quot;46]&quot;, so it would match &quot;W46]&quot; or
   &quot;-46]&quot;. However, if the &quot;]&quot; is escaped with a backslash it
   is interpreted as the end of range, so [W-\]46] is
   interpreted as a single class containing a range followed by two
   separate characters. The octal or hexadecimal representation
   of &quot;]&quot; can also be used to end a range.
  </p>
  <p class="para">
   Ranges operate in ASCII collating sequence. They can also be
   used for characters specified numerically, for example
   [\000-\037]. If a range that includes letters is used when
   case-insensitive (caseless) matching is set, it matches the
   letters in either case. For example, [W-c] is equivalent to
   [][\^_`wxyzabc], matched case-insensitively, and if character
   tables for the &quot;fr&quot; locale are in use, [\xc8-\xcb] matches
   accented E characters in both cases.
  </p>
  <p class="para">
   The character types \d, \D, \s, \S, \w, and \W may also
   appear in a character class, and add the characters that
   they match to the class. For example, [\dABCDEF] matches any
   hexadecimal digit. A circumflex can conveniently be used
   with the upper case character types to specify a more
   restricted set of characters than the matching lower case type.
   For example, the class [^\W_] matches any letter or digit,
   but not underscore.
  </p>
  <p class="para">
   All non-alphanumeric characters other than \, -, ^ (at the
   start) and the terminating ] are non-special in character
   classes, but it does no harm if they are escaped. The pattern
   terminator is always special and must be escaped when used
   within an expression.
  </p>
  <p class="para">
   Perl supports the POSIX notation for character classes. This uses names
   enclosed by <code class="literal">[:</code> and <code class="literal">:]</code> within
   the enclosing square brackets. PCRE also
   supports this notation. For example, <code class="literal">[01[:alpha:]%]</code>
   matches &quot;0&quot;, &quot;1&quot;, any alphabetic character, or &quot;%&quot;. The supported class
   names are:
   <table class="doctable table">
    <caption><strong>Character classes</strong></caption>
    
     <tbody class="tbody">
      <tr><td><code class="literal">alnum</code></td><td>letters and digits</td></tr>

      <tr><td><code class="literal">alpha</code></td><td>letters</td></tr>

      <tr><td><code class="literal">ascii</code></td><td>character codes 0 - 127</td></tr>

      <tr><td><code class="literal">blank</code></td><td>space or tab only</td></tr>

      <tr><td><code class="literal">cntrl</code></td><td>control characters</td></tr>

      <tr><td><code class="literal">digit</code></td><td>decimal digits (same as \d)</td></tr>

      <tr><td><code class="literal">graph</code></td><td>printing characters, excluding space</td></tr>

      <tr><td><code class="literal">lower</code></td><td>lower case letters</td></tr>

      <tr><td><code class="literal">print</code></td><td>printing characters, including space</td></tr>

      <tr><td><code class="literal">punct</code></td><td>printing characters, excluding letters and digits</td></tr>

      <tr><td><code class="literal">space</code></td><td>white space (not quite the same as \s)</td></tr>

      <tr><td><code class="literal">upper</code></td><td>upper case letters</td></tr>

      <tr><td><code class="literal">word</code></td><td>&quot;word&quot; characters (same as \w)</td></tr>

      <tr><td><code class="literal">xdigit</code></td><td>hexadecimal digits</td></tr>

     </tbody>
    
   </table>

   The <code class="literal">space</code> characters are HT (9), LF (10), VT (11), FF (12), CR (13),
   and space (32). Notice that this list includes the VT character (code
   11). This makes &quot;space&quot; different to <code class="literal">\s</code>, which does not include VT (for
   Perl compatibility).
  </p>
  <p class="para">
   The name <code class="literal">word</code> is a Perl extension, and <code class="literal">blank</code> is a GNU extension
   from Perl 5.8. Another Perl extension is negation, which is indicated
   by a <code class="literal">^</code> character after the colon. For example,
   <code class="literal">[12[:^digit:]]</code> matches &quot;1&quot;, &quot;2&quot;, or any non-digit.
  </p>
  <p class="para">
   In UTF-8 mode, characters with values greater than 128 do not match any
   of the POSIX character classes.
   As of libpcre 8.10 some character classes are changed to use
   Unicode character properties, in which case the mentioned restriction does
   not apply. Refer to the <a href="http://www.pcre.org/pcre.txt" class="link external">&raquo;&nbsp;PCRE(3) manual</a>
   for details.
  </p>
  <p class="para">
   Unicode character properties can appear inside a character class. They can
   not be part of a range. The minus (hyphen) character after a Unicode
   character class will match literally. Trying to end a range with a Unicode
   character property will result in a warning.
  </p>
 </div>    <div class="contribute">
      <h3 class="title">Found A Problem?</h3>
      <div>
         
      </div>
      <div class="edit-bug">
        <a href="https://github.com/php/doc-base/blob/master/README.md" title="This will take you to our contribution guidelines on GitHub" target="_blank" rel="noopener noreferrer">Learn How To Improve This Page</a>
        •
        <a href="https://github.com/php/doc-en/blob/master/reference/pcre/pattern.syntax.xml">Submit a Pull Request</a>
        •
        <a href="https://github.com/php/doc-en/issues/new?body=From%20manual%20page:%20https:%2F%2Fphp.net%2Fregexp.reference.character-classes%0A%0A---">Report a Bug</a>
      </div>
    </div><section id="usernotes">
 <div class="head">
  <span class="action"><a href="/manual/add-note.php?sect=regexp.reference.character-classes&amp;repo=en&amp;redirect=https://www.php.net/manual/en/regexp.reference.character-classes.php">＋<small>add a note</small></a></span>
  <h3 class="title">User Contributed Notes <span class="count">3 notes</span></h3>
 </div><div id="allnotes">
  <div class="note" id="126435">  <div class="votes">
    <div id="Vu126435">
    <a href="/manual/vote-note.php?id=126435&amp;page=regexp.reference.character-classes&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd126435">
    <a href="/manual/vote-note.php?id=126435&amp;page=regexp.reference.character-classes&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V126435" title="88% like this...">
    27
    </div>
  </div>
  <a href="#126435" class="name">
  <strong class="user"><em>greaties at ghvernuft dot nl</em></strong></a><a class="genanchor" href="#126435"> &para;</a><div class="date" title="2021-09-18 11:58"><strong>4 years ago</strong></div>
  <div class="text" id="Hcom126435">
<div class="phpcode"><code><span class="html">From deep down the PCRE manual at <a href="http://www.pcre.org/pcre.txt" rel="nofollow" target="_blank">http://www.pcre.org/pcre.txt</a> :<br /><br />         \d     any decimal digit<br />         \D     any character that is not a decimal digit<br />         \h     any horizontal white space character<br />         \H     any character that is not a horizontal white space character<br />         \s     any white space character<br />         \S     any character that is not a white space character<br />         \v     any vertical white space character<br />         \V     any character that is not a vertical white space character<br />         \w     any "word" character<br />         \W     any "non-word" character</span></code></div>
  </div>
 </div>
  <div class="note" id="128198">  <div class="votes">
    <div id="Vu128198">
    <a href="/manual/vote-note.php?id=128198&amp;page=regexp.reference.character-classes&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd128198">
    <a href="/manual/vote-note.php?id=128198&amp;page=regexp.reference.character-classes&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V128198" title="81% like this...">
    10
    </div>
  </div>
  <a href="#128198" class="name">
  <strong class="user"><em>Julian</em></strong></a><a class="genanchor" href="#128198"> &para;</a><div class="date" title="2023-02-08 12:48"><strong>2 years ago</strong></div>
  <div class="text" id="Hcom128198">
<div class="phpcode"><code><span class="html">Examples with Character classes<br /><br /><span class="default">&lt;?php<br /><br />$stringA </span><span class="keyword">= </span><span class="string">"1 In the beginning God created the heavens and the earth."</span><span class="keyword">;<br /></span><span class="default">$stringB </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/[[:^alnum:]]/'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$stringA</span><span class="keyword">); </span><span class="comment">// string(46) "1InthebeginningGodcreatedtheheavensandtheearth"<br /></span><span class="default">$stringC </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/[[:^alpha:]]/'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$stringA</span><span class="keyword">); </span><span class="comment">// string(45) "InthebeginningGodcreatedtheheavensandtheearth"<br /></span><span class="default">$stringD </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/[[:^ascii:]]/'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="string">"Pokémon"</span><span class="keyword">); </span><span class="comment">// string(6) "Pokmon"<br /></span><span class="default">$stringE </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/[[:^blank:]]/'</span><span class="keyword">, </span><span class="string">'*'</span><span class="keyword">, </span><span class="default">$stringA</span><span class="keyword">); </span><span class="comment">// string(57) "* ** *** ********* *** ******* *** ******* *** *** ******"<br /></span><span class="default">$stringF </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/[[:blank:]]/'</span><span class="keyword">, </span><span class="string">'-'</span><span class="keyword">, </span><span class="default">$stringA</span><span class="keyword">); </span><span class="comment">// string(57) "1-In-the-beginning-God-created-the-heavens-and-the-earth."<br /><br /></span><span class="default">$stringG </span><span class="keyword">= </span><span class="default">sprintf</span><span class="keyword">(</span><span class="string">"Vertical Tabulation: %s"</span><span class="keyword">, </span><span class="default">chr</span><span class="keyword">(</span><span class="default">11</span><span class="keyword">)); </span><span class="comment">// string(22) "Vertical Tabulation: "<br /></span><span class="default">$stringH </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/[[:cntrl:]]/'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$stringG</span><span class="keyword">); </span><span class="comment">// string(21) "Vertical Tabulation: "<br /></span><span class="default">$stringLengthG </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$stringG</span><span class="keyword">); </span><span class="comment">// int(22)<br /></span><span class="default">$stringLengthH </span><span class="keyword">= </span><span class="default">strlen</span><span class="keyword">(</span><span class="default">$stringH</span><span class="keyword">); </span><span class="comment">// int(21)<br /><br /></span><span class="default">$stringI </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/[[:digit:]]/'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="string">'My age is 35'</span><span class="keyword">); </span><span class="comment">//string(10) "My age is "<br /></span><span class="default">$stringJ </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/[[:^digit:]]/'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="string">'My age is 35'</span><span class="keyword">); </span><span class="comment">// string(2) "35"<br /><br /></span><span class="default">$stringK </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/[[:^graph:]]/'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$stringG</span><span class="keyword">); </span><span class="comment">// string(19) "VerticalTabulation:"<br /></span><span class="default">$stringL </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/[[:graph:]]/'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$stringG</span><span class="keyword">); </span><span class="comment">// string(3) "  "<br /><br /></span><span class="default">$stringM </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/[[:lower:]]/'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$stringG</span><span class="keyword">); </span><span class="comment">// string(6) "V T: "<br /></span><span class="default">$stringN </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/[[:^lower:]]/'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$stringG</span><span class="keyword">); </span><span class="comment">// string(16) "erticalabulation"<br /><br /></span><span class="default">$stringO </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/[[:^print:]]/'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$stringG</span><span class="keyword">); </span><span class="comment">// string(21) "Vertical Tabulation: "<br /></span><span class="default">$stringP </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/[[:print:]]/'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$stringG</span><span class="keyword">); </span><span class="comment">// string(1) ""<br /><br /></span><span class="default">$stringQ </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/[[:punct:]]/'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$stringG</span><span class="keyword">); </span><span class="comment">// string(21) "Vertical Tabulation "<br /></span><span class="default">$stringR </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/[[:^punct:]]/'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$stringG</span><span class="keyword">); </span><span class="comment">// string(1) ":"<br /><br /></span><span class="default">$stringS </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/[[:space:]]/'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$stringG</span><span class="keyword">); </span><span class="comment">// string(19) "VerticalTabulation:"<br /></span><span class="default">$stringT </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/[[:^space:]]/'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$stringG</span><span class="keyword">); </span><span class="comment">// string(3) "  "<br /><br /></span><span class="default">$stringU </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/[[:upper:]]/'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$stringG</span><span class="keyword">); </span><span class="comment">// string(20) "ertical abulation: "<br /></span><span class="default">$stringV </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/[[:^upper:]]/'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$stringG</span><span class="keyword">); </span><span class="comment">// string(2) "VT"<br /><br /></span><span class="default">$stringW </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/[[:word:]]/'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$stringG</span><span class="keyword">); </span><span class="comment">// string(4) " : "<br /></span><span class="default">$stringX </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/[[:^word:]]/'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="default">$stringG</span><span class="keyword">); </span><span class="comment">// string(18) "VerticalTabulation"<br /><br /></span><span class="default">$stringY </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/[[:xdigit:]]/'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="string">'abcdefghijklmnopqrstuvwxyz0123456789'</span><span class="keyword">); </span><span class="comment">// string(20) "ghijklmnopqrstuvwxyz"<br /></span><span class="default">$stringZ </span><span class="keyword">= </span><span class="default">preg_replace</span><span class="keyword">(</span><span class="string">'/[[:^xdigit:]]/'</span><span class="keyword">, </span><span class="string">''</span><span class="keyword">, </span><span class="string">'abcdefghijklmnopqrstuvwxyz0123456789'</span><span class="keyword">); </span><span class="comment">// string(16) "abcdef0123456789"</span></span></code></div>
  </div>
 </div>
  <div class="note" id="122693">  <div class="votes">
    <div id="Vu122693">
    <a href="/manual/vote-note.php?id=122693&amp;page=regexp.reference.character-classes&amp;vote=up" title="Vote up!" class="usernotes-voteu">up</a>
    </div>
    <div id="Vd122693">
    <a href="/manual/vote-note.php?id=122693&amp;page=regexp.reference.character-classes&amp;vote=down" title="Vote down!" class="usernotes-voted">down</a>
    </div>
    <div class="tally" id="V122693" title="66% like this...">
    7
    </div>
  </div>
  <a href="#122693" class="name">
  <strong class="user"><em>wordragon at wrestingcontrol dot com</em></strong></a><a class="genanchor" href="#122693"> &para;</a><div class="date" title="2018-05-03 04:52"><strong>7 years ago</strong></div>
  <div class="text" id="Hcom122693">
<div class="phpcode"><code><span class="html">The documentation says:<br /><br />"The character types \d, \D, \s, \S, \w, and \W may also appear in a character class, and add the characters that they match to the class."<br /><br />It does not stress that other escape types may not.  I wanted to split a string on either a comma (","), or a new line "\n".  When my input stream began to include "\r\n", I decided to change "\n" to "\R".  Unfortunately, my test string did not include a capital "R", or I might have found the problem sooner.  My '/[\R,]/' was simply splitting on comma and the letter "R".<br /><br />My test string...<br />"The Yum-Yum Company\r\n127 bernard street"<br /><br />What DID work: '/(?:\R|,)+/'<br /><br />["The Yum-Yum Company","127 bernard street"]<br /><br />Given character classes only match one character, I can see clearly why my expectations were justifiably dashed, but hopefully this comment will save time for someone else.<br /><br />I might add, this has taught me the value of PCRE_EXTRA (modifier "X"), which I have begun to use routinely now.</span></code></div>
  </div>
 </div></div>
<div class="foot"><a href="/manual/add-note.php?sect=regexp.reference.character-classes&amp;repo=en&amp;redirect=https://www.php.net/manual/en/regexp.reference.character-classes.php">＋<small>add a note</small></a></div>
</section>    </section><!-- layout-content -->
        <aside class='layout-menu'>

        <ul class='parent-menu-list'>
                                    <li>
                <a href="reference.pcre.pattern.syntax.php">PCRE regex syntax</a>

                                    <ul class='child-menu-list'>

                                                <li class="">
                            <a href="regexp.introduction.php" title="Introduction">Introduction</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.delimiters.php" title="Delimiters">Delimiters</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.meta.php" title="Meta-&#8203;characters">Meta-&#8203;characters</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.escape.php" title="Escape sequences">Escape sequences</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.unicode.php" title="Unicode character properties">Unicode character properties</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.anchors.php" title="Anchors">Anchors</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.dot.php" title="Dot">Dot</a>
                        </li>
                                                <li class="current">
                            <a href="regexp.reference.character-classes.php" title="Character classes">Character classes</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.alternation.php" title="Alternation">Alternation</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.internal-options.php" title="Internal option setting">Internal option setting</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.subpatterns.php" title="Subpatterns">Subpatterns</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.repetition.php" title="Repetition">Repetition</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.back-references.php" title="Back references">Back references</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.assertions.php" title="Assertions">Assertions</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.onlyonce.php" title="Once-&#8203;only subpatterns">Once-&#8203;only subpatterns</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.conditional.php" title="Conditional subpatterns">Conditional subpatterns</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.comments.php" title="Comments">Comments</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.recursive.php" title="Recursive patterns">Recursive patterns</a>
                        </li>
                                                <li class="">
                            <a href="regexp.reference.performance.php" title="Performance">Performance</a>
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
