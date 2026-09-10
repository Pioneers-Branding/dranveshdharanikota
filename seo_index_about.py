import os
import re

directory = r"c:\Users\GCV\Desktop\Dr Anvesh"

# index.php
index_path = os.path.join(directory, "index.php")
with open(index_path, 'r', encoding='utf-8') as f:
    content = f.read()

new_title = 'Best Oncology Surgeon in Hyderabad | Dr. Anvesh'
new_desc = 'Best oncology surgeon and cancer doctor in Hyderabad. Dr. Anvesh Dharanikota offers radiation oncology, robotic, laparoscopic, and oncoplastic cancer surgery.'

content = re.sub(r"\$title\s*=\s*'[^']+';", f"$title          = '{new_title}';", content)
content = re.sub(r"\$description\s*=\s*'[^']+';", f"$description    = '{new_desc}';", content)
content = re.sub(r"\$og_title\s*=\s*'[^']+';", f"$og_title       = '{new_title}';", content)
content = re.sub(r"\$og_description\s*=\s*'[^']+';", f"$og_description = '{new_desc}';", content)

# update H1
content = re.sub(r"<h1 class=\"hero__title\">[^<]+</h1>", f"<h1 class=\"hero__title\">Best Oncology Surgeon in Hyderabad</h1>", content)

with open(index_path, 'w', encoding='utf-8') as f:
    f.write(content)

# about.php
about_path = os.path.join(directory, "about.php")
with open(about_path, 'r', encoding='utf-8') as f:
    content = f.read()

new_title = 'About Best Cancer Doctor in Hyderabad | Dr. Anvesh'
new_desc = 'Meet Dr. Anvesh Dharanikota, famous oncology specialist and top cancer doctor in Hyderabad. Specialized in robotic and minimally invasive cancer treatments.'

content = re.sub(r"\$title\s*=\s*'[^']+';", f"$title       = '{new_title}';", content)
content = re.sub(r"\$description\s*=\s*'[^']+';", f"$description = '{new_desc}';", content)

with open(about_path, 'w', encoding='utf-8') as f:
    f.write(content)

print("Updated index and about.")
