---
id: d0021f45-bce8-429b-935b-a9751ba57c35
blueprint: html
title: 'Datalist Element: Predefined Input Suggestions'
teaser: 'The datalist HTML element provides a list of predefined options for input fields, enhancing user experience with autocomplete suggestions.'
reference_title:
  code: '<datalist>'
  mode: htmlmixed
article:
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The '
      -
        type: text
        marks:
          -
            type: code
        text: '<datalist>'
      -
        type: text
        text: ' HTML element is used to provide a set of predefined options for an '
      -
        type: text
        marks:
          -
            type: code
        text: '<input>'
      -
        type: text
        text: ' element, enabling an autocomplete feature for user input fields. This element enhances user experience by allowing users to select from a list of suggested values while still having the flexibility to enter their own input. The '
      -
        type: text
        marks:
          -
            type: code
        text: '<datalist>'
      -
        type: text
        text: ' element is particularly useful in form fields where a range of valid inputs is known, such as selecting a country, color, or category.'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'To implement a '
      -
        type: text
        marks:
          -
            type: code
        text: '<datalist>'
      -
        type: text
        text: ', it is paired with an '
      -
        type: text
        marks:
          -
            type: code
        text: '<input>'
      -
        type: text
        text: ' element that includes a '
      -
        type: text
        marks:
          -
            type: code
        text: list
      -
        type: text
        text: ' attribute. The value of the '
      -
        type: text
        marks:
          -
            type: code
        text: list
      -
        type: text
        text: ' attribute should match the '
      -
        type: text
        marks:
          -
            type: code
        text: id
      -
        type: text
        text: ' of the '
      -
        type: text
        marks:
          -
            type: code
        text: '<datalist>'
      -
        type: text
        text: '. Inside the '
      -
        type: text
        marks:
          -
            type: code
        text: '<datalist>'
      -
        type: text
        text: ', '
      -
        type: text
        marks:
          -
            type: code
        text: '<option>'
      -
        type: text
        text: ' elements are used to define the available options. Each '
      -
        type: text
        marks:
          -
            type: code
        text: '<option>'
      -
        type: text
        text: ' can have a '
      -
        type: text
        marks:
          -
            type: code
        text: value
      -
        type: text
        text: ' attribute, which specifies the text that appears in the dropdown list. Here is an example of how the '
      -
        type: text
        marks:
          -
            type: code
        text: '<datalist>'
      -
        type: text
        text: ' tag can be used:'
  -
    type: codeBlock
    attrs:
      language: null
    content:
      -
        type: text
        text: |-
          <label for="color">Choose a color:</label>
          <input list="colors" id="color" name="color">
          <datalist id="colors">
            <option value="Red">
            <option value="Green">
            <option value="Blue">
            <option value="Yellow">
            <option value="Purple">
          </datalist>
  -
    type: heading
    attrs:
      level: 3
    content:
      -
        type: text
        text: 'Valid Attributes for '
      -
        type: text
        marks:
          -
            type: code
        text: '<datalist>'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The '
      -
        type: text
        marks:
          -
            type: code
        text: '<datalist>'
      -
        type: text
        text: ' element itself does not have specific attributes beyond the global attributes, which are common to all HTML elements. These include:'
  -
    type: set
    attrs:
      id: m0h58tv5
      values:
        type: table
        size: md
        first_row_headers: true
        first_column_headers: true
        table:
          -
            cells:
              - Attribute
              - Description
          -
            cells:
              - id
              - 'Specifies a unique identifier for the datalist, used to link it with an input element.'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The '
      -
        type: text
        marks:
          -
            type: code
        text: '<datalist>'
      -
        type: text
        text: ' element is a versatile tool for improving form usability by providing users with a list of suggestions that can reduce input errors and streamline data entry. However, it is important to note that '
      -
        type: text
        marks:
          -
            type: code
        text: '<datalist>'
      -
        type: text
        text: ' is not a replacement for the '
      -
        type: text
        marks:
          -
            type: code
        text: '<select>'
      -
        type: text
        text: ' element, as it allows for freeform input in addition to the predefined options.'
link: 'https://html.spec.whatwg.org/multipage/form-elements.html#the-datalist-element'
seo_noindex: false
seo_nofollow: false
seo_canonical_type: entry
sitemap_change_frequency: weekly
sitemap_priority: 0.5
tags:
  - html
comments_allowed: true
group: forms_and_input
updated_by: c00c8ed8-a262-4060-92e8-44c2c4931c51
updated_at: 1743365071
seo_title: 'HTML Datalist Element: Input Suggestions Explained'
seo_description: 'Learn about the datalist HTML element for offering predefined input suggestions, improving user experience.'
og_title: 'Understanding the HTML Datalist Element'
og_description: 'Discover how the datalist element in HTML enhances input fields with predefined suggestions, offering improved user experience and reduced input errors.'
date: '2025-03-30'
---
