=begin
#HelloSign API

#HelloSign v3 API

The version of the OpenAPI document: 3.0.0
Contact: apisupport@hellosign.com
Generated by: https://openapi-generator.tech
OpenAPI Generator version: 5.3.0

=end

require 'spec_helper'
require 'json_spec'
require_relative '../test_utils'

config = do_config
api_client = HelloSign::ApiClient.new(config)

describe HelloSign::ApiAppApi do
  context 'ApiAppApiTest' do
    api = HelloSign::ApiAppApi.new

    it 'testApiAppCreate' do
      request_class = 'ApiAppCreateRequest'
      request_data = get_fixture_data(request_class)[:default]

      response_class = 'ApiAppGetResponse'
      response_data = get_fixture_data(response_class)[:default]

      set_expected_response(200, JSON.dump(response_data))
      expected = api_client.convert_to_type(response_data, response_class)
      obj = api_client.convert_to_type(request_data, request_class)

      result = api.api_app_create(obj)

      expect(result.class.to_s).to eq("HelloSign::#{response_class}")
      expect(result.to_json).to be_json_eql(expected.to_json)
    end

    it 'testApiAppGet' do
      client_id = '0dd3b823a682527788c4e40cb7b6f7e9'

      response_class = 'ApiAppGetResponse'
      response_data = get_fixture_data(response_class)[:default]

      set_expected_response(200, JSON.dump(response_data))
      expected = api_client.convert_to_type(response_data, response_class)

      result = api.api_app_get(client_id)

      expect(result.class.to_s).to eq("HelloSign::#{response_class}")
      expect(result.to_json).to be_json_eql(expected.to_json)
    end

    it 'testApiAppUpdate' do
      client_id = '0dd3b823a682527788c4e40cb7b6f7e9'

      request_class = 'ApiAppUpdateRequest'
      request_data = get_fixture_data(request_class)[:default]

      response_class = 'ApiAppGetResponse'
      response_data = get_fixture_data(response_class)[:default]

      set_expected_response(200, JSON.dump(response_data))
      expected = api_client.convert_to_type(response_data, response_class)
      obj = api_client.convert_to_type(request_data, request_class)

      result = api.api_app_update(client_id, obj)

      expect(result.class.to_s).to eq("HelloSign::#{response_class}")
      expect(result.to_json).to be_json_eql(expected.to_json)
    end

    skip 'testApiAppDelete' do
    end

    it 'testApiAppList' do
      page = 1
      page_size = 20

      response_class = 'ApiAppListResponse'
      response_data = get_fixture_data(response_class)[:default]

      set_expected_response(200, JSON.dump(response_data))
      expected = api_client.convert_to_type(response_data, response_class)

      result = api.api_app_list({ :page => page, :page_size => page_size })

      expect(result.class.to_s).to eq("HelloSign::#{response_class}")
      expect(result.to_json).to be_json_eql(expected.to_json)
    end
  end
end
