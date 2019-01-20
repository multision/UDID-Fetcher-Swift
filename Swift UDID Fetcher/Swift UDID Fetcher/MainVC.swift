//
//  MainVC.swift
//  Swift UDID Fetcher
//
//  Created by user on 1/20/19.
//  Copyright © 2019 MasonD3V. All rights reserved.
//

import UIKit

class MainVC: UITableViewController {
    
    @IBOutlet weak var udid: UILabel!
    
    override func viewDidLoad() {
        super.viewDidLoad()
        
        // Checks if UDID is fetched already, if so it will be printed into the Label.
        if UserDefaults.standard.value(forKey: "udid") == nil {
            print("UDID has not yet been fetched.")
        } else {
            let newUdid = (UserDefaults.standard.value(forKey: "udid") as! String).replacingOccurrences(of: "udid://?udid=", with: "")
            udid.text = "\(newUdid)"
        }
        
    }
    
    override func tableView(_ tableView: UITableView, didSelectRowAt indexPath: IndexPath) {
        if indexPath.section == 0 && indexPath.row == 0 {
            if udid.text != "Fetching Needed" {
                UIPasteboard.general.string = udid.text
                
                let alert = UIAlertController(title: "UDID Fetcher", message: "You have copied your UDID to your clipboard.\n\n\(udid.text!)", preferredStyle: .alert)
                alert.addAction(UIAlertAction(title: "Okay", style: .default, handler: nil))
                self.present(alert, animated: true, completion: nil)
                
            } else {
                let urlString = "http://github.masond3v.us/UDID"
                if let url = URL(string: urlString) {
                    UIApplication.shared.openURL(url)
                }
            }
        } else if indexPath.section == 1 && indexPath.row == 0 {
            let urlString = "https://twitter.com/masond3v"
            if let url = URL(string: urlString) {
                UIApplication.shared.openURL(url)
            }
        }
    }

}
