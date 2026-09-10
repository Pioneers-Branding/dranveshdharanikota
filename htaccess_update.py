import os

filepath = r"c:\Users\GCV\Desktop\Dr Anvesh\.htaccess"
with open(filepath, 'r', encoding='utf-8') as f:
    lines = f.readlines()

redirects = """
# 301 Redirects for SEO updated URLs
RewriteRule ^services/breast-oncoplastic/?$ /services/breast-cancer-treatment-hyderabad [R=301,L]
RewriteRule ^services/esophageal-cancer/?$ /services/esophageal-cancer-treatment-hyderabad [R=301,L]
RewriteRule ^services/gastric-cancer/?$ /services/stomach-gastric-cancer-treatment-hyderabad [R=301,L]
RewriteRule ^services/colorectal-cancer/?$ /services/colorectal-cancer-treatment-hyderabad [R=301,L]
RewriteRule ^services/hpb/?$ /services/hpb-liver-pancreatic-cancer-treatment-hyderabad [R=301,L]
RewriteRule ^services/lung-cancer/?$ /services/lung-cancer-treatment-hyderabad [R=301,L]
RewriteRule ^services/gynecologic-oncology/?$ /services/gynecologic-cancer-treatment-hyderabad [R=301,L]
RewriteRule ^services/head-neck-oncology/?$ /services/head-neck-cancer-treatment-hyderabad [R=301,L]
RewriteRule ^services/uro-oncology/?$ /services/urological-cancer-treatment-hyderabad [R=301,L]
RewriteRule ^services/musculoskeletal-oncology/?$ /services/bone-cancer-treatment-hyderabad [R=301,L]
"""

# Find where to insert it (after line 66, which is index.html rule)
insert_idx = -1
for i, line in enumerate(lines):
    if "RewriteRule ^(.+?)(/index)?\\.html$ /$1 [R=301,L]" in line:
        insert_idx = i + 1
        break

if insert_idx != -1:
    lines.insert(insert_idx, redirects)
    with open(filepath, 'w', encoding='utf-8') as f:
        f.writelines(lines)
    print("Added redirects.")
else:
    print("Could not find insertion point.")
